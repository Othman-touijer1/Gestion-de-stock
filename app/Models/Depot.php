<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depot extends Model
{
    protected $table = 'depot';  
    protected $fillable = [
        'nom',
        'statut'
    ];
    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'produit_depot')
                    ->withPivot('quantite');
    }
   
    public function produitDepots()
    {
        return $this->hasMany(ProduitDepot::class);
    }

}