<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LignFacture extends Model
{
    protected $table = 'lignes_facture';
    use HasFactory;

    protected $fillable = [
        'facture_id',
        'designation',
        'produit_id', // Use produit_id instead of produit
        'prix_ht',
        'quantite',
        'tva',
        'remise',
        'total_ht',
        'total_ttc',
    ];

    public function facture()
    {
        return $this->belongsTo(Facture::class);
    }
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}