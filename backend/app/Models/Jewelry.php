<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\Review;

class Jewelry extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'categorie_id', 'price', 'materiel', 'brand'];

    public function categorie()
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
