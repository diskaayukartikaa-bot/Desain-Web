<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diska Ayu | Creative Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fce4ec 0%, #f3e5f5 100%);
            color: #4a148c;
            min-height: 100vh;
        }
        
        /* Navbar Aesthetic Gradient */
        .navbar {
            background: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(10px);
            border-bottom: 2px solid rgba(233, 30, 99, 0.1);
        }
        .navbar-brand {
            font-weight: 700;
            background: linear-gradient(to right, #e91e63, #9c27b0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* 5 Menu Styling */
        .nav-link {
            font-weight: 500;
            color: #6a1b9a !important;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #e91e63 !important;
            transform: translateY(-2px);
        }

        /* AI ASDK Widget Purple Gradient */
        .ai-asdk-widget {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(45deg, #9c27b0, #e91e63);
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            box-shadow: 0 10px 20px rgba(156, 39, 176, 0.3);
            z-index: 1000;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            border: none;
        }
        .ai-asdk-widget:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 25px rgba(156, 39, 176, 0.4);
        }

        /* Hero Container */
        .hero-section {
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <!-- Navbar dengan 5 Menu Utama -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">DISKA.AYU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portofolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container hero-section">
        @yield('content')
    </div>

    <!-- AI ASDK Widget -->
    <button class="ai-asdk-widget">
        ✨ AI ASDK Helper
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>