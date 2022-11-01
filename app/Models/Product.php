<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    public function scopeActive($query)
    {
        return $query->where('active',1);
    }

}
