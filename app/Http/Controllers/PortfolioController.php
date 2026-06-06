<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Menampilkan semua galeri portofolio
     */
    public function index()
    {
        $items = PortfolioItem::with('category')->get();
        return view('portofolio', compact('items'));
    }

    /**
     * Menampilkan detail portofolio (Metode STAR) berdasarkan ID
     */
    public function show($id)
    {
        // Mengambil 1 data portfolio berdasarkan ID beserta kategori relasinya. 
        // Jika ID tidak ditemukan di database, otomatis melempar halaman error 404.
        $item = PortfolioItem::with('category')->findOrFail($id);
        
        // Mengirim data tersebut ke file view portfolio-detail.blade.php
        return view('portfolio-detail', compact('item'));
    }
}