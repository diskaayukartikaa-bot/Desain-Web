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
            /* Background Mesh Gradient yang lebih menarik */
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
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.6rem;
            background: linear-gradient(45deg, #e91e63, #9c27b0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-link {
            font-weight: 600;
            color: #6a1b9a !important;
            margin: 0 10px;
            position: relative;
            transition: 0.3s;
        }

        /* Hover standar untuk 4 menu pertama */
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

        .nav-item:not(:last-child) .nav-link:hover::after {
            width: 100%;
        }

        /* Desain Khusus Kotak untuk Menu Contact */
        .nav-link-contact {
            background: rgba(233, 30, 99, 0.1);
            color: #e91e63 !important;
            border: 1.5px solid #e91e63;
            border-radius: 12px;
            padding: 8px 20px !important;
            margin-left: 15px !important;
            transition: all 0.3s ease !important;
        }

        .nav-link-contact:hover {
            background: #e91e63;
            color: #fff !important;
            box-shadow: 0 5px 15px rgba(233, 30, 99, 0.3);
            transform: translateY(-2px);
        }

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
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portofolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-contact" href="#contact">Contact</a></li>
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