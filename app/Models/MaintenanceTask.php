<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceTask extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'utilisateur_id',
        'installation_id',
        'type',
        'description',
        'date',
        'statut',
        'priorite',
        'notes'
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function installation()
    {
        return $this->belongsTo(Installation::class);
    }

    protected static function getDescription(string $action, $model): string
    {
        switch ($action) {
            case 'création':
                return "Nouvelle tâche de maintenance créée de type {$model->type}";
            case 'modification':
                return "Mise à jour de la tâche de maintenance n°{$model->id}";
            case 'suppression':
                return "Suppression de la tâche de maintenance n°{$model->id}";
            default:
                return parent::getDescription($action, $model);
        }
    }
}