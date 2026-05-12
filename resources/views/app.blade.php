<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diska Ayu | Creative Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fff5f8 0%, #f3e5f5 100%);
            color: #4a148c;
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        /* Navbar Modern & Clean */
        .navbar {
            background: rgba(255, 255, 255, 0.7) !important;
            backdrop-filter: blur(15px);
            padding: 20px 0;
            border-bottom: 1px solid rgba(233, 30, 99, 0.1);
            transition: all 0.3s ease;
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.6rem;
            background: linear-gradient(45deg, #e91e63, #9c27b0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 1px;
        }

        .nav-link {
            font-weight: 600;
            color: #6a1b9a !important;
            margin: 0 15px;
            position: relative;
            transition: 0.3s;
        }

        /* Animasi Underline di Semua Menu */
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(45deg, #e91e63, #9c27b0);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #e91e63 !important;
            transform: translateY(-2px);
        }

        /* AI ASDK Widget */
        .ai-asdk-widget {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(45deg, #9c27b0, #e91e63);
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(233, 30, 99, 0.4);
            z-index: 1000;
            font-weight: 600;
            border: none;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
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

    <div class="container mt-5 pt-5">
        @yield('content')
    </div>

    <button class="ai-asdk-widget">✨ AI ASDK Helper</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>