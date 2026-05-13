<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;
use App\Http\Controllers\Controller; // Tambahkan ini jika belum ada

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        try {
            // Memastikan ada input pesan
            if (!$request->has('message')) {
                return response()->json(['reply' => 'Maaf, saya tidak menerima pesan apa pun.'], 400);
            }

            $prompt = "Anda adalah AI Manager untuk Diska Ayu Kartika, mahasiswa Multimedia PENS. User bertanya: " . $request->message;
            
            // Memanggil API Gemini
            $result = Gemini::geminiPro()->generateContent($prompt);
            
            return response()->json([
                'reply' => $result->text()
            ]);
        } catch (\Exception $e) {
            // Ini akan memunculkan pesan error aslinya agar kita tahu masalahnya
            return response()->json([
                'reply' => 'Ada kendala teknis: ' . $e->getMessage()
            ], 500);
        }
    }
}