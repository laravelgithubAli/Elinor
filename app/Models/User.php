<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'number',
        'password',
        'role_id',
        'job',
        'image',
        'nationalCode',
        'address',
        'gender',
        'cardNumber',
        'birthday',
        'Newsletters',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function getHasStarAttribute($product)
    {
        return Star::query()->where('user_id',$this->id)->where('product_id',$product->id)->exists();
    }

    public function likes()
    {
        return $this->belongsToMany(Product::class,'likes')->withTimestamps();
    }

    public function like(Product $product)
    {
        $this->likes()->sync($product);
    }

}
