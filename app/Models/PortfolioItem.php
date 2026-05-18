<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'slug_id', 'badge', 'title', 'desc'];

    // Relasi: Setiap item portfolio hanya dimiliki oleh satu kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}