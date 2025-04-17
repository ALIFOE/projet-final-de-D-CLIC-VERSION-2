<?php

namespace App\Services;

use App\Models\Installation;
use App\Models\ProductionData;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class InverterService
{
    /**
     * Récupère les données en temps réel de l'onduleur
     */
    public function getLiveData(Installation $installation)
    {
        try {
            // Configuration de la connexion à l'onduleur
            $url = "http://{$installation->inverter_ip}:{$installation->inverter_port}/api/live";
            
            // Appel à l'API de l'onduleur
            $response = Http::timeout(5)->get($url);
            
            if ($response->successful()) {
                $data = $response->json();
                
                // Enregistrement des données
                return ProductionData::create([
                    'installation_id' => $installation->id,
                    'timestamp' => now(),
                    'current_power' => $data['current_power'] ?? 0,
                    'daily_energy' => $data['daily_energy'] ?? 0,
                    'total_energy' => $data['total_energy'] ?? 0,
                    'temperature' => $data['temperature'] ?? 0,
                    'irradiance' => $data['irradiance'] ?? 0,
                    'efficiency' => $this->calculateEfficiency($data),
                ]);
            }
            
            Log::warning("Impossible de récupérer les données de l'onduleur", [
                'installation_id' => $installation->id,
                'status' => $response->status()
            ]);
            
            return null;
        } catch (\Exception $e) {
            Log::error("Erreur lors de la communication avec l'onduleur", [
                'installation_id' => $installation->id,
                'error' => $e->getMessage()
            ]);
            
            return null;
        }
    }

    /**
     * Calcule l'efficacité basée sur les données reçues
     */
    private function calculateEfficiency($data)
    {
        if (!isset($data['current_power']) || !isset($data['irradiance']) || $data['irradiance'] == 0) {
            return 0;
        }

        // Calcul basique de l'efficacité (à adapter selon votre onduleur)
        $theoreticalPower = $data['irradiance'] * $installation->power_capacity;
        return ($data['current_power'] / $theoreticalPower) * 100;
    }

    /**
     * Récupère l'historique des données de production
     */
    public function getHistoricalData(Installation $installation, $startDate, $endDate)
    {
        return ProductionData::where('installation_id', $installation->id)
            ->whereBetween('timestamp', [$startDate, $endDate])
            ->orderBy('timestamp')
            ->get();
    }

    /**
     * Vérifie l'état de connexion de l'onduleur
     */
    public function checkConnection(Installation $installation)
    {
        try {
            $url = "http://{$installation->inverter_ip}:{$installation->inverter_port}/api/status";
            $response = Http::timeout(2)->get($url);
            
            return $response->successful();
        } catch (\Exception $e) {
            return false;
        }
    }
} 