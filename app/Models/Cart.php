<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;

    public $fillable = [
        'qty',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
