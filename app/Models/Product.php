<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'price', 'description', 'sku'];

    // Relasi dengan kategori produk
    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
