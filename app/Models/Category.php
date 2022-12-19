<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
