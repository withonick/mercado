<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function productsLiked(){
        return $this->belongsToMany(Product::class, 'user_wishlist')
            ->withTimestamps();
    }

    public function cartProducts(){
        return $this->belongsToMany(Product::class, 'cart')
            ->withPivot('amount', 'size', 'key')
            ->withTimestamps();
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
