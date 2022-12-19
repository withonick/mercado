<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'category_id', 'img_one', 'img_two', 'img_three', 'product_video'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function usersLiked(){
        return $this->belongsToMany(User::class, 'user_wishlist')
            ->withTimestamps();
    }

    public function cartUser(){
        return $this->belongsToMany(User::class, 'cart')
            ->withPivot('amount', 'size', 'key')
            ->withTimestamps();
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }
}
