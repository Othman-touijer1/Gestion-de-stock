<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function historiques(): HasMany
    {
        return $this->hasMany(Historique::class, 'produit_id');
    }

    public function facture(): BelongsTo
    {
        return $this->belongsTo(Facture::class);
    }

    public function lignfacture()
    {
        return $this->belongsTo(LignFacture::class);
    }

}