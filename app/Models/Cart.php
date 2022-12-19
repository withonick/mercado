<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class Cart extends Model
{
    use HasFactory;

    protected $table = "cart";

    protected $fillable = ['product_id', 'user_id', 'amount', 'size', 'status', 'key'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
