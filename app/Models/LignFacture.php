<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LignFacture extends Model
{
    use HasFactory;

    protected $fillable = [
        'facture_id',
        'designation',
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
}