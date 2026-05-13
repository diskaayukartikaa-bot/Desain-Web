<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        try {
            $prompt = "Anda adalah AI Manager untuk Diska Ayu Kartika, mahasiswa Multimedia PENS. Jawablah dengan ramah dan profesional. Pertanyaan: " . $request->message;
            
            // GANTI BAGIAN INI: dari geminiPro() menjadi gemini15Flash()
            $result = Gemini::gemini15Flash()->generateContent($prompt);
            
            return response()->json([
                'reply' => $result->text()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'reply' => 'Ada kendala teknis: ' . $e->getMessage()
            ], 500);
        }
    }
}