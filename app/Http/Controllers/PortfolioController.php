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
            ['id' => 'film-nasional', 'category' => 'projects', 'badge' => 'Film Production', 'color' => 'pink', 'title' => 'Short Film: Juara 1 Nasional', 'desc' => 'Produksi film pendek kompetisi nasional berskala besar.'],
            ['id' => 'film-judol', 'category' => 'projects', 'badge' => 'Film Production', 'color' => 'pink', 'title' => 'Short Film: 10 Besar Karya Terbaik', 'desc' => 'Produksi sinema kreatif bertema realitas sosial judi online.'],
            ['id' => 'film-av', 'category' => 'projects', 'badge' => 'Audio Visual', 'color' => 'pink', 'title' => 'Film Audio Visual Semester 2', 'desc' => 'Proyek praktikum penyutradaraan dan sinematografi PENS.'],
            ['id' => 'yearbook', 'category' => 'projects', 'badge' => 'Graphic Design', 'color' => 'pink', 'title' => 'Yearbook Visual Design', 'desc' => 'Perancangan tata letak grafis dan konsep estetika album kenangan.'],

            // EXPERIENCE
            ['id' => 'mmbfest-2025', 'category' => 'experience', 'badge' => 'Leadership', 'color' => 'purple', 'title' => 'Ketua Pelaksana MMB Fest 2025', 'desc' => 'Memimpin kepanitiaan festival multimedia terbesar program studi.'],
            ['id' => 'siniar-pens', 'category' => 'experience', 'badge' => 'Management', 'color' => 'purple', 'title' => 'Program Director Siniar PENS', 'desc' => 'Penanggung jawab utama konten dan manajemen penyiaran podcast.'],
            ['id' => 'creative-agency', 'category' => 'experience', 'badge' => 'Professional', 'color' => 'purple', 'title' => 'Creative Agency Industry Employee', 'desc' => 'Menangani pembuatan aset kreatif dan kampanye visual klien agency.'],
            ['id' => 'jawapos', 'category' => 'experience', 'badge' => 'Internship', 'color' => 'purple', 'title' => 'Graphic Designer Intern at Jawa Pos', 'desc' => 'Pengalaman magang profesional di industri media cetak nasional.'],
            ['id' => 'trainer-kemen', 'category' => 'experience', 'badge' => 'Public Speaking', 'color' => 'purple', 'title' => 'Trainer Stafsus Kementerian', 'desc' => 'Mengisi pelatihan keahlian multimedia untuk jajaran staf khusus.'],
            ['id' => 'trainer-flashcom', 'category' => 'experience', 'badge' => 'Public Speaking', 'color' => 'purple', 'title' => 'Trainer at Flashcom Indonesia', 'desc' => 'Mengajar kelas bidang keahlian desain grafis dan video editing.'],
            
            // PERUBAHAN JABATAN: Sudah disesuaikan menjadi Staff Public Relations HIMA MMB
            ['id' => 'hima-mmb', 'category' => 'experience', 'badge' => 'Organization', 'color' => 'purple', 'title' => 'Staff Public Relations HIMA MMB', 'desc' => 'Manajemen hubungan publik, komunikasi eksternal, dan pelaksanaan program kerja komunikasi kreatif organisasi mahasiswa.'],
            
            ['id' => 'mc-events', 'category' => 'experience', 'badge' => 'Public Speaking', 'color' => 'purple', 'title' => 'Master of Ceremony (MC) Events', 'desc' => 'Pemandu jalannya berbagai acara formal dan informal di kampus.'],
            ['id' => 'campus-expo', 'category' => 'experience', 'badge' => 'Event', 'color' => 'purple', 'title' => 'Campus Expo Coordinator', 'desc' => 'Eksibisi pengenalan dunia perkuliahan dan multimedia broadcasting.'],
            ['id' => 'pkm-center', 'category' => 'experience', 'badge' => 'Academic', 'color' => 'purple', 'title' => 'PKM Center PENS Admin', 'desc' => 'Tim fasilitator program kreativitas mahasiswa tingkat politeknik.'],

            // ACHIEVEMENTS
            ['id' => 'lsp-cert', 'category' => 'achievements', 'badge' => 'Certification', 'color' => 'orange', 'title' => 'Sertifikasi Profesi Nasional LSP', 'desc' => 'Uji kompetensi keahlian resmi berlisensi BNSP.'],
            ['id' => 'its-bizcase', 'category' => 'achievements', 'badge' => 'Competition', 'color' => 'orange', 'title' => 'Finalis ITS Business Case Competition', 'desc' => 'Pemecahan masalah strategi bisnis tingkat nasional.'],
            ['id' => 'technogear', 'category' => 'achievements', 'badge' => 'Training', 'color' => 'orange', 'title' => 'Sertifikat LKMM Technogear', 'desc' => 'Pelatihan kepemimpinan manajemen mahasiswa tingkat dasar.'],
            ['id' => 'mmbfest-2024', 'category' => 'achievements', 'badge' => 'Participation', 'color' => 'orange', 'title' => 'MMB Fest 2024 Participant', 'desc' => 'Kontribusi aktif dalam kepanitiaan teknis festival sebelumnya.']
        ];
    }

    /**
     * Halaman Utama Portfolio (Sudah Diselaraskan ke Ejaan File View)
     */
    public function index()
    {
        $items = $this->getPortfolioData();
        return view('portfolio', compact('items'));
    }

    /**
     * Halaman Detail Menggunakan Metode STAR
     */
    public function show($id)
    {
        $allData = $this->getPortfolioData();
        
        // Cari data spesifik berdasarkan ID array
        $item = Arr::first($allData, function ($value) use ($id) {
            return $value['id'] === $id;
        });

        // Jika ID tidak ditemukan, tampilkan halaman 404
        if (!$item) {
            abort(404);
        }

        return view('portfolio-detail', compact('item'));
    }
}