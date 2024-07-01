<?php

namespace App\Models;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
      'image', 
      'nom',
      'description',
      'categorie_id',
      'prix',
    ];

    public function categories()
    {
      
       return $this->belongsTo(Categorie::class);

    }
    public function supermarches()
    {
      
       return $this->belongsTo(supermarche::class);

    }

    public function paniers()
    {
      return $this->belonceTomany(Panier::class);
    }
}
