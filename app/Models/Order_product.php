<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    use HasFactory;
    protected $table = 'order_product';
    protected $fillable = [
        'product_id', 'order_id' , 'price', 'quantity'
    ];
    public $timestamps = false;


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
