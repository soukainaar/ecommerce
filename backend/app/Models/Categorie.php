<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jewelry;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function jewelries(){
        return $this->hasMany(Jewelry::class, 'categorie_id');
    }
}
