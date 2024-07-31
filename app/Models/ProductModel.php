<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_name',
        'product_price',
        'product_image',
        'product_description',
        'product_category',
        'product_brand',
        'product_quantity',
        'product_status',
        'product_rating',
        'product_discount',
        'product_discount_price'
    ];
}