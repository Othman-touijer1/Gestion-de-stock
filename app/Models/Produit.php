<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'image',
        'referent_id',
        'description',
        'categorie'
    ];
    public function depots(): BelongsToMany
    {
        return $this->belongsToMany(Depot::class, 'produit_depots')
                    ->withPivot('quantite')
                    ->withTimestamps();
    }
    public function produitDepots(): HasMany
    {
        return $this->hasMany(ProduitDepot::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
