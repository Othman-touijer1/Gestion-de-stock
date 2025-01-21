<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Depot extends Model
{
    protected $table = 'depots';  
    protected $fillable = [
        'nom',
        'statut'
    ];
    public function produits(): BelongsToMany
    {
        return $this->belongsToMany(Produit::class, 'produit_depots')
                    ->withPivot('quantite')
                    ->withTimestamps();
    }
    public function produitDepots(): HasMany
    {
        return $this->hasMany(ProduitDepot::class);
    }

}