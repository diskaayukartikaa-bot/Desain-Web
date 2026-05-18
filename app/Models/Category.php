<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

    // Relasi: Satu kategori memiliki banyak item portfolio
    public function portfolioItems()
    {
        return $this->hasMany(PortfolioItem::class);
    }
}