<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceTask extends Model
{
    use HasFactory;

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
} 