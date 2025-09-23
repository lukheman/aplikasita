<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Aplikasita' }} | Jasa Pembuatan Aplikasi Profesional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }

        /* Navbar Shadow */
        .navbar { box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); }

        /* Hero Section Parallax */
        .hero {
            background: linear-gradient(135deg, rgba(79,70,229,0.9), rgba(124,58,237,0.9)),
                        url('https://picsum.photos/1920/1080?blur=3') no-repeat center center/cover;
            background-attachment: fixed;
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 5rem 1rem;
        }

        /* Card Shadow */
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            transition: transform 0.2s;
        }
        .card:hover { transform: translateY(-5px); }

        /* Button Shadow */
        .btn {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-radius: 0.75rem;
        }

        /* Section Padding */
        .py-md-8 {
            padding-top: 6rem !important;
            padding-bottom: 6rem !important;
        }

#contact a:hover {
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15) !important;
}
    </style>
    @stack('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">Aplikasita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="py-4 bg-white text-center text-muted border-top">
        <div class="container">
            <small>&copy; {{ date('Y') }} Aplikasita. All rights reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
