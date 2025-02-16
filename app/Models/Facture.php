<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_facture',
        'date_facture',
        'societe',
        'adresse',
        'telephone',
        'adresse_client',
        'client',
        'total_ht',
        'total_tva',
        'total_ttc',
    ];

    public function lignesFacture()
    {
        return $this->hasMany(LignFacture::class);
    }
}