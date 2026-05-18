<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diska Ayu | Creative Portfolio</title>
    <link class="rounded-circle" rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff5f8;
            background-image: 
                radial-gradient(at 0% 0%, hsla(328,100%,93%,1) 0, transparent 50%), 
                radial-gradient(at 50% 0%, hsla(272,100%,93%,1) 0, transparent 50%), 
                radial-gradient(at 100% 0%, hsla(328,100%,93%,1) 0, transparent 50%);
            color: #4a148c;
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        .navbar {
            background: rgba(255, 255, 255, 0.6) !important;
            backdrop-filter: blur(20px);
            padding: 15px 0;
            border-bottom: 1px solid rgba(233, 30, 99, 0.05);
        }
        
        /* Navbar Brand Styling with Icon alignment */
        .navbar-brand {
            font-weight: 800;
            font-size: 1.6rem;
            display: flex;
            align-items: center;
            background: linear-gradient(45deg, #e91e63, #9c27b0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Specific Gradient Styling for the Flower Icon */
        .logo-icon {
            font-size: 1.8rem;
            margin-right: 10px;
            background: linear-gradient(45deg, #e91e63, #9c27b0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .nav-link {
            font-weight: 600;
            color: #6a1b9a !important;
            margin: 0 10px;
            position: relative;
            transition: 0.3s;
        }

        .nav-item:not(:last-child) .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: #e91e63;
            transition: width 0.3s ease;
        }

        .nav-item:not(:last-child) .nav-link:hover::after { width: 100%; }

        .nav-link-contact {
            background: linear-gradient(45deg, #e91e63, #9c27b0);
            color: #fff !important;
            border-radius: 50px;
            padding: 8px 25px !important;
            margin-left: 15px !important;
            box-shadow: 0 4px 15px rgba(233, 30, 99, 0.2);
            transition: 0.3s;
        }

        .nav-link-contact:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(233, 30, 99, 0.4);
            filter: brightness(1.1);
        }

        /* --- AI CHAT WIDGET STYLING --- */
        #ai-chat-container {
            position: fixed;
            bottom: 100px;
            right: 30px;
            width: 350px;
            height: 450px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(156, 39, 176, 0.25);
            display: flex;
            flex-direction: column;
            z-index: 1050;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(156, 39, 176, 0.1);
        }

        .ai-chat-hidden {
            transform: scale(0) translateY(100px);
            opacity: 0;
            pointer-events: none;
        }

        .ai-chat-header {
            background: linear-gradient(45deg, #9c27b0, #e91e63);
            color: white;
            padding: 15px 20px;
            border-radius: 20px 20px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
        }

        .ai-chat-body {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
            background: rgba(255, 255, 255, 0.5);
        }

        .ai-msg {
            padding: 10px 15px;
            border-radius: 15px;
            max-width: 85%;
            font-size: 0.85rem;
        }

        .ai-msg.bot {
            background: #f3e5f5;
            color: #4a148c;
            align-self: flex-start;
            border-bottom-left-radius: 2px;
        }

        .ai-msg.user {
            background: linear-gradient(45deg, #e91e63, #9c27b0);
            color: white;
            align-self: flex-end;
            border-bottom-right-radius: 2px;
        }

        .ai-chat-input {
            padding: 15px;
            border-top: 1px solid rgba(0,0,0,0.05);
            display: flex;
            gap: 10px;
            background: white;
            border-radius: 0 0 20px 20px;
            align-items: center;
        }

        .ai-chat-input input {
            flex: 1;
            border: none;
            background: #f8f9fa;
            padding: 10px 15px;
            border-radius: 12px;
            outline: none;
            font-size: 0.9rem;
        }

        .ai-chat-input button {
            width: 40px;
            height: 40px;
            min-width: 40px;
            min-height: 40px;
            background: #9c27b0;
            border: none;
            border-radius: 50% !important;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 !important;
            transition: 0.3s;
        }

        .ai-asdk-widget {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(45deg, #9c27b0, #e91e63);
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            z-index: 1000;
            font-weight: 600;
            border: none;
            box-shadow: 0 10px 30px rgba(156, 39, 176, 0.3);
        }

        .btn-close-chat {
            background: none;
            border: none;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-flower1 logo-icon"></i> DISKA.AYU
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portofolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-contact" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        @yield('content')
    </div>

    <div id="ai-chat-container" class="ai-chat-hidden">
        <div class="ai-chat-header">
            <span><i class="bi bi-stars me-2"></i>AI Manager</span>
            <button onclick="toggleChat()" class="btn-close-chat"><i class="bi bi-x-lg"></i></button>
        </div>
        <div id="ai-chat-body" class="ai-chat-body">
            <div class="ai-msg bot">Halo Diska! Saya asisten virtual Anda. Ada yang bisa saya bantu terkait portofolio hari ini?</div>
        </div>
        <div class="ai-chat-input">
            <input type="text" id="user-input" placeholder="Tanya sesuatu...">
            <button onclick="sendMessage()">
                <i class="bi bi-send-fill" style="margin-left: 2px;"></i>
            </button>
        </div>
    </div>

    <button class="ai-asdk-widget" onclick="toggleChat()">
        <i class="bi bi-chat-dots-fill me-2"></i> ✨ AI ASDK Helper
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function toggleChat() {
            const chatContainer = document.getElementById('ai-chat-container');
            chatContainer.classList.toggle('ai-chat-hidden');
        }

        function sendMessage() {
            const input = document.getElementById('user-input');
            const chatBody = document.getElementById('ai-chat-body');

            if (input.value.trim() !== "") {
                const userText = input.value.trim();
                
                // 1. Tampilkan komponen pesan pengguna
                const userDiv = document.createElement('div');
                userDiv.className = 'ai-msg user';
                userDiv.textContent = userText;
                chatBody.appendChild(userDiv);
                input.value = "";
                chatBody.scrollTop = chatBody.scrollHeight;

                // 2. Tampilkan komponen indikator sedang mengetik
                const typingDiv = document.createElement('div');
                typingDiv.className = 'ai-msg bot';
                typingDiv.id = 'ai-typing';
                typingDiv.textContent = "Sedang berpikir...";
                chatBody.appendChild(typingDiv);
                chatBody.scrollTop = chatBody.scrollHeight;

                // 3. Simulasi Respon Cerdas Lokal (Bebas Error API Server)
                setTimeout(() => {
                    const typing = document.getElementById('ai-typing');
                    if(typing) typing.remove();

                    const lowerText = userText.toLowerCase();
                    let botReply = "";

                    // Logika filter kata kunci profiling
                    if (lowerText.includes('halo') || lowerText.includes('hallo') || lowerText.includes('hi') || lowerText.includes('hey')) {
                        botReply = "Halo! Saya AI Manager untuk Diska Ayu Kartika. Ada yang bisa saya bantu untuk meninjau portofolio, pengalaman organisasi, atau karya multimedia Diska hari ini? ✨";
                    } 
                    else if (lowerText.includes('portfolio') || lowerText.includes('portofolio') || lowerText.includes('karya') || lowerText.includes('film') || lowerText.includes('desain')) {
                        botReply = "Diska memiliki rekam jejak karya yang luar biasa! Mulai dari Short Film (Juara 1 Nasional & 10 Besar Sinema Judol), proyek Audio Visual semester 2, hingga desain grafis pro. Anda bisa cek tab 'Portfolio' untuk melihat arsip lengkap beserta case study-nya! 🎬";
                    } 
                    else if (lowerText.includes('hima') || lowerText.includes('organisasi') || lowerText.includes('mmb fest') || lowerText.includes('pemimpin') || lowerText.includes('ketua')) {
                        botReply = "Diska memiliki jiwa kepemimpinan yang matang. Beliau dipercaya sebagai Ketua Pelaksana MMB Fest 2025, Ketua HIMA MMB PENS, dan juga Program Director untuk Siniar PENS. Manajemen koordinasi tim adalah salah satu keahlian utamanya! 💼";
                    } 
                    else if (lowerText.includes('kerja') || lowerText.includes('magang') || lowerText.includes('pengalaman') || lowerText.includes('agency') || lowerText.includes('jawa pos')) {
                        botReply = "Tentu! Diska punya pengalaman magang sebagai Graphic Designer di koran nasional Jawa Pos, Video Editor berita di Jawa Pos TV, serta aktif bekerja menangani aset visual di Creative Agency ternama. 👤";
                    }
                    else if (lowerText.includes('trainer') || lowerText.includes('kementerian') || lowerText.includes('mengajar') || lowerText.includes('flashcom')) {
                        botReply = "Diska juga berpengalaman sebagai pembicara profesional! Beliau pernah dipercaya menjadi Trainer multimedia untuk jajaran Stafsus Kementerian serta menjadi Trainer desain grafis dan video editing di Flashcom Indonesia. 🎙️";
                    }
                    else if (lowerText.includes('kontak') || lowerText.includes('hubungi') || lowerText.includes('email') || lowerText.includes('instagram')) {
                        botReply = "Anda bisa berkolaborasi langsung dengan Diska melalui halaman 'Contact', atau kirim pesan resmi ke email diskaayukartikaa@gmail.com dan Instagram @dayyyka_ ya! ✉️";
                    }
                    else {
                        botReply = "Terima kasih atas pertanyaannya! Sebagai AI Manager Diska, saya merekomendasikan Anda meninjau menu 'Portfolio' untuk melihat karya film/desainnya, atau menu 'About' untuk membaca pengalaman profesionalnya di industri kreatif. Ada hal lain yang ingin ditanyakan?";
                    }

                    // 4. Cetak balasan simulasi ke panel body chatbox
                    const botDiv = document.createElement('div');
                    botDiv.className = 'ai-msg bot';
                    botDiv.textContent = botReply;
                    chatBody.appendChild(botDiv);
                    chatBody.scrollTop = chatBody.scrollHeight;

                }, 1000); // Penundaan waktu respons selama 1 detik agar simulasi terasa natural
            }
        }

        document.getElementById('user-input').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') sendMessage();
        });
    </script>
    @stack('scripts')
</body>
</html>