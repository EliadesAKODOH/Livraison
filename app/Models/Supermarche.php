<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supermarche extends Model
{

    public function produits()
    {
       return $this->hasMany(Produit::class);
    }


 use HasFactory;
}
