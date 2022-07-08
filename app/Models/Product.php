<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_detail_id',
        'product_category_id',
        'name',
        'price',
        'stock',
        'description',
        'thumbnail',
        'production_date',
        'discount',
        'weight',
        'voucher_id',
    ];
    
}
