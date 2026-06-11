<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PortfolioController extends Controller
{
    /**
     * Menyediakan data master portfolio
     */
    private function getPortfolioData()
    {
        return [
            // PROJECTS
            [
                'id' => 'film-nasional', 
                'category' => 'projects', 
                'badge' => 'Film Production', 
                'color' => 'pink', 
                'title' => 'Short Film: Juara 1 Nasional', 
                'desc' => 'Produksi film pendek kompetisi nasional berskala besar.',
                'video_url' => 'https://www.youtube.com/embed/SVLaUt3t8Rs', // Link asli film pendekmu
                'image_url' => null
            ],
            [
                'id' => 'film-judol', 
                'category' => 'projects', 
                'badge' => 'Film Production', 
                'color' => 'pink', 
                'title' => 'Short Film: 10 Besar Karya Terbaik', 
                'desc' => 'Produksi sinema kreatif bertema realitas sosial judi online.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'film-av', 
                'category' => 'projects', 
                'badge' => 'Audio Visual', 
                'color' => 'pink', 
                'title' => 'Film Audio Visual Semester 2', 
                'desc' => 'Proyek praktikum penyutradaraan dan sinematografi PENS.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'yearbook', 
                'category' => 'projects', 
                'badge' => 'Graphic Design', 
                'color' => 'pink', 
                'title' => 'Yearbook Visual Design', 
                'desc' => 'Perancangan tata letak grafis dan konsep estetika album kenangan.',
                'video_url' => null, 'image_url' => null
            ],

            // EXPERIENCE
            [
                'id' => 'mmbfest-2025', 
                'category' => 'experience', 
                'badge' => 'Leadership', 
                'color' => 'purple', 
                'title' => 'Ketua Pelaksana MMB Fest 2025', 
                'desc' => 'Memimpin kepanitiaan festival multimedia terbesar program studi.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'siniar-pens', 
                'category' => 'experience', 
                'badge' => 'Management', 
                'color' => 'purple', 
                'title' => 'Program Director Siniar PENS', 
                'desc' => 'Penanggung jawab utama konten dan manajemen penyiaran podcast.',
                'video_url' => 'https://www.youtube.com/embed/kBn5QA6MGhU', // Link asli podcast Siniar PENS
                'image_url' => null
            ],
            [
                'id' => 'creative-agency', 
                'category' => 'experience', 
                'badge' => 'Professional', 
                'color' => 'purple', 
                'title' => 'Creative Agency Industry Employee', 
                'desc' => 'Menangani pembuatan aset kreatif dan kampanye visual klien agency.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'jawapos', 
                'category' => 'experience', 
                'badge' => 'Internship', 
                'color' => 'purple', 
                'title' => 'Graphic Designer Intern at Jawa Pos', 
                'desc' => 'Pengalaman magang profesional di industri media cetak nasional.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'trainer-kemen', 
                'category' => 'experience', 
                'badge' => 'Public Speaking', 
                'color' => 'purple', 
                'title' => 'Trainer Stafsus Kementerian', 
                'desc' => 'Mengisi pelatihan keahlian multimedia untuk jajaran staf khusus.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'trainer-flashcom', 
                'category' => 'experience', 
                'badge' => 'Public Speaking', 
                'color' => 'purple', 
                'title' => 'Trainer at Flashcom Indonesia', 
                'desc' => 'Mengajar kelas bidang keahlian desain grafis dan video editing.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'hima-mmb', 
                'category' => 'experience', 
                'badge' => 'Organization', 
                'color' => 'purple', 
                'title' => 'Staff Public Relations HIMA MMB', 
                'desc' => 'Manajemen hubungan publik, komunikasi eksternal, dan pelaksanaan program kerja komunikasi kreatif organisasi mahasiswa.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'mc-events', 
                'category' => 'experience', 
                'badge' => 'Public Speaking', 
                'color' => 'purple', 
                'title' => 'Master of Ceremony (MC) Events', 
                'desc' => 'Pemandu jalannya berbagai acara formal dan informal di kampus.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'campus-expo', 
                'category' => 'experience', 
                'badge' => 'Event', 
                'color' => 'purple', 
                'title' => 'Campus Expo Coordinator', 
                'desc' => 'Eksibisi pengenalan dunia perkuliahan dan multimedia broadcasting.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'pkm-center', 
                'category' => 'experience', 
                'badge' => 'Academic', 
                'color' => 'purple', 
                'title' => 'PKM Center PENS Admin', 
                'desc' => 'Tim fasilitator program kreativitas mahasiswa tingkat politeknik.',
                'video_url' => null, 'image_url' => null
            ],

            // ACHIEVEMENTS
            [
                'id' => 'lsp-cert', 
                'category' => 'achievements', 
                'badge' => 'Certification', 
                'color' => 'orange', 
                'title' => 'Sertifikasi Profesi Nasional LSP', 
                'desc' => 'Uji kompetensi keahlian resmi berlisensi BNSP.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'its-bizcase', 
                'category' => 'achievements', 
                'badge' => 'Competition', 
                'color' => 'orange', 
                'title' => 'Finalis ITS Business Case Competition', 
                'desc' => 'Pemecahan masalah strategi bisnis tingkat nasional.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'technogear', 
                'category' => 'achievements', 
                'badge' => 'Training', 
                'color' => 'orange', 
                'title' => 'Sertifikat LKMM Technogear', 
                'desc' => 'Pelatihan kepemimpinan manajemen mahasiswa tingkat dasar.',
                'video_url' => null, 'image_url' => null
            ],
            [
                'id' => 'mmbfest-2024', 
                'category' => 'achievements', 
                'badge' => 'Participation', 
                'color' => 'orange', 
                'title' => 'MMB Fest 2024 Participant', 
                'desc' => 'Kontribusi aktif dalam kepanitiaan teknis festival sebelumnya.',
                'video_url' => null, 'image_url' => null
            ]
        ];
    }

    public function index()
    {
        $items = $this->getPortfolioData();
        return view('portfolio', compact('items'));
    }

    public function show($id)
    {
        $allData = $this->getPortfolioData();
        
        $item = Arr::first($allData, function ($value) use ($id) {
            return $value['id'] === $id;
        });

        if (!$item) {
            abort(404);
        }

        return view('portfolio-detail', compact('item'));
    }
}