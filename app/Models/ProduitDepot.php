<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProduitDepot extends Model
{
    protected $table = 'produit_depot';
    protected $fillable = ['produit_id', 'depot_id', 'quantite'];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
    public function depot()
    {
        return $this->belongsTo(Depot::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
                                                                                                

}

