<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diska Ayu | Creative Portfolio</title>
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

        /* Hover underline animation for regular links */
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

        /* Modern Pill Button for Contact */
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

    <button class="ai-asdk-widget">✨ AI ASDK Helper</button>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>