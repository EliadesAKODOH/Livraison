<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
 
    public function livraisons()
    {
      
       return $this->belongsTo(Livraison::class);

    }

    use HasFactory;
}
