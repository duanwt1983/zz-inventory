<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku', 'name', 'category_id', 'unit', 'barcode', 'default_supplier_id', 'shelf_life_days', 'batch_control', 'expiry_control'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'default_supplier_id');
    }
}
