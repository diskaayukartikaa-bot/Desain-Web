<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $prompt = "Anda adalah AI Manager untuk User yang mellihat portofolio Diska Ayu Kartika, mahasiswa Teknologi Multimedia Broadcasting PENS. 
        Diska adalah Program Director Siniar PENS dan pernah magang di Jawa Pos TV. 
        Tugas Anda adalah membantu pengunjung website portofolionya dengan ramah dan profesional. 
        Pertanyaan user: " . $request->message;

        $result = Gemini::geminiPro()->generateContent($prompt);
        
        return response()->json([
            'reply' => $result->text()
        ]);
    }
}