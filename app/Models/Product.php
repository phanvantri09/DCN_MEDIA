<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id_category',
        'name',
        'sub_description',
        'amount',
        'discount',
        'description',
        'price',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function formatProductForDisplay()
    {
        $hasDiscount = $this->discount > 0;
        $discountedPrice = $hasDiscount ? $this->price * (1 - $this->discount / 100) : $this->price;

        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => number_format($discountedPrice, 2),
            'original_price' => $hasDiscount ? number_format($this->price, 2) : null,
            'discount' => $this->discount,
            'image' => \App\Helpers\ConstCommon::getLinkImageToStorage($this->image),
            'url' => route('product.detail', ['id' => $this->id]),
        ];
    }
}
