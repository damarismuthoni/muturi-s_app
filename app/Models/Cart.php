<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Cart  extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table  = 'cart';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'product_quantity',
    ];

    public function product(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    
   
}


