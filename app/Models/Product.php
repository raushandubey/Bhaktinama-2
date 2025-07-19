<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'is_available'
    ];
    
    /**
     * Get the orders for this product
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
