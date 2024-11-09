<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'stock',
        'tags',
        'category_id', // Updated to category_id
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); // Ensure this matches
    }
}
