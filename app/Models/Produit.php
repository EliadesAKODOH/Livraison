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

    public function categorie()
    {
      
       return $this->belongsTo(Categorie::class);

    }
}
