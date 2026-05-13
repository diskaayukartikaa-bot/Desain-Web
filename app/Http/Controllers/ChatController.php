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
            // Kita ambil pesan dari user
            $userMessage = $request->input('message');

            // Kita perintahkan Gemini dengan identitas Anda sebagai anak PENS
            $prompt = "Anda adalah AI Manager untuk Diska Ayu Kartika, mahasiswa MMB PENS, Program Director Siniar PENS, dan Ketua HIMA MMB. Jawablah dengan profesional dan ramah. Pertanyaan user: " . $userMessage;
            
            // Gunakan model terbaru 'gemini-1.5-flash' agar cepat dan stabil
            $result = Gemini::model('gemini-1.5-flash')->generateContent($prompt);
            
            return response()->json([
                'reply' => $result->text()
            ]);
        } catch (\Exception $e) {
            // Jika ada masalah, dia akan memunculkan error aslinya di chatbox
            return response()->json([
                'reply' => 'Ada kendala teknis: ' . $e->getMessage()
            ], 500);
        }
    }
}