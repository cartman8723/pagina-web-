<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model

{


    protected $fillable = [
        'image',
        'name',
        'description',
        'price',
        'category_id',
        
    ];

    public function cart() {
        return $this->hasMany(Cart::class);
    }


    public function category() {
        return $this->belongsTo(Category::class);
    }




    use HasFactory;
}
