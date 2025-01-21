<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProduitDepot extends Model
{
    protected $table = 'produit_depots';
    protected $fillable = ['produit_id', 'depot_id', 'quantite', 'user_id'];
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
    public function depot()
    {
        return $this->belongsTo(Depot::class, 'depot_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

