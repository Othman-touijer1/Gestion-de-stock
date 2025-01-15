<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function depots()
    {
        return $this->belongsToMany(Depot::class, 'produit_depot')
                    ->withPivot('quantite');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
