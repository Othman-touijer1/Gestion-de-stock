<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    protected $fillable = [
        'produit_id', 'depot_id', 'user_id', 'quantite', 'type'
    ];
    public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }
    
    public function depot()
    {
        return $this->belongsTo(Depot::class, 'depot_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
