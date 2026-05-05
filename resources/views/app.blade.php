<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Diska Ayu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk AI ASDK di pojok kanan */
        .ai-asdk-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #6f42c1;
            color: white;
            padding: 15px 20px;
            border-radius: 50px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            z-index: 1000;
            font-weight: bold;
            cursor: pointer;
        }
        body { padding-top: 60px; }
    </style>
</head>
<body>
    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Diska.Dev</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Tentang Kita</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portofolio">Portofolio & Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Dinamis -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- AI ASDK Widget -->
    <div class="ai-asdk-widget">
        🤖 AI ASDK
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>