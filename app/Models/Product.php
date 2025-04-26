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
        $discountedPrice = $hasDiscount ? $this->price - ($this->price * $this->discount / 100) : $this->price;

        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => number_format($discountedPrice),
            'original_price' => $hasDiscount ? number_format($this->price) : null,
            'discount' => $this->discount,
            'image' => \App\Helpers\ConstCommon::getLinkImageToStorage($this->image),
            'url' => route('products.detail', ['id' => $this->id]),
            'sub_description' => $this->sub_description,
            'description' => $this->description,
            'amount' => $this->amount,
        ];
    }
}
