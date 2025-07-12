<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasita | Jasa Pembuatan Aplikasi Profesional </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; }
        .hero { background: linear-gradient(135deg, #4f46e5, #7c3aed); }
        .card { border: none; border-radius: 12px; transition: transform 0.3s; }
        .card:hover { transform: translateY(-5px); }
        .nav-link { transition: color 0.2s; }
        .nav-link:hover { color: #4f46e5 !important; }
        .btn-primary { background-color: #4f46e5; border: none; border-radius: 8px; }
        .btn-primary:hover { background-color: #4338ca; }
        .btn-outline-primary { border-color: #4f46e5; color: #4f46e5; border-radius: 8px; }
        .btn-outline-primary:hover { background-color: #4f46e5; color: white; }
        .section-title { font-weight: 700; color: #1e293b; }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">Aplikasita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-dark" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#products">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#custom">Custom Apps</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#technologies">Teknologi</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#why-us">Keunggulan</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-2" href="https://wa.me/6282250223147">Konsultasi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero text-white py-5 py-md-8">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Ciptakan Aplikasi Impian Anda</h1>
            <p class="lead mb-4">Solusi aplikasi custom dan siap pakai sesuai kebutuhanta</p>
            <a href="#contact" class="btn btn-outline-light px-4 py-2">Mulai Sekarang</a>
        </div>
    </section>

    <!-- Products Section -->
        <section id="products" class="py-5 py-md-8">
            <div class="container">
                <h2 class="section-title text-center mb-5">Katalog Aplikasi Siap Pakai</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
                    <div class="col">
                        <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                            <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                                <!-- Icon for Sistem Informasi: Database icon to represent data management -->
                                <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 3C7.58 3 4 4.79 4 7v10c0 2.21 3.58 4 8 4s8-1.79 8-4V7c0-2.21-3.58-4-8-4zm0 2c3.31 0 6 1.34 6 3s-2.69 3-6 3-6-1.34-6-3 2.69-3 6-3zm0 14c-3.31 0-6-1.34-6-3v-2.5c1.45 1.24 3.65 2 6 2s4.55-.76 6-2V17c0 1.66-2.69 3-6 3zm0-5c-3.31 0-6-1.34-6-3v-2.5c1.45 1.24 3.65 2 6 2s4.55-.76 6-2V12c0 1.66-2.69 3-6 3z"/>
                                </svg>
                            </div>
                            <h3 class="fw-medium mb-3">Sistem Informasi</h3>
                            <p class="text-muted small">
                                Membantu Anda mengatur data dan aktivitas bisnis secara lebih rapi, cepat, dan mudah lewat sistem berbasis web.
                            </p>
                            <ul class="list-unstyled text-muted small mb-4">
                                <li class="mb-2">✔️ Lihat data kapan saja dan di mana saja</li>
                                <li class="mb-2">✔️ Tampilan mudah dipahami</li>
                                <li class="mb-2">✔️ Bisa terhubung dengan sistem lain</li>
                                <li class="mb-2">✔️ Mengurangi pekerjaan manual</li>
                            </ul>
                            <!-- <a href="#contact" class="btn btn-outline-primary btn-sm mt-auto">Lihat Detail</a> -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                            <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                                <!-- Icon for Sistem Pakar: Brain icon to represent expert knowledge and decision-making -->
                                <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C9.24 2 7 4.24 7 7c0 1.44.62 2.74 1.62 3.66C7.54 11.6 7 12.74 7 14v3c0 1.66 1.34 3 3 3h4c1.66 0 3-1.34 3-3v-3c0-1.26-.54-2.4-1.62-3.34C16.38 9.74 17 8.44 17 7c0-2.76-2.24-5-5-5zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm-2 12v-2h4v2h-4z"/>
                                </svg>
                            </div>
                            <h3 class="fw-medium mb-3">Sistem Pakar</h3>
                            <p class="text-muted small">
                                Aplikasi pintar yang membantu pengambilan keputusan, seperti diagnosis penyakit atau konsultasi, seolah dibantu oleh seorang ahli.
                            </p>
                            <ul class="list-unstyled text-muted small mb-4">
                                <li class="mb-2">✔️ Menggunakan logika dan pengetahuan pakar</li>
                                <li class="mb-2">✔️ Tampilan mudah digunakan oleh siapa saja</li>
                                <li class="mb-2">✔️ Bisa diakses oleh banyak pengguna sekaligus</li>
                                <li class="mb-2">✔️ Cocok untuk diagnosa, prediksi, atau rekomendasi</li>
                                <li>✔️ Mendukung berbagai metode seperti:
                                    <br>— Certainty Factor (CF),
                                    <br>— Dempster-Shafer,
                                    <br>— Naive Bayes,
                                    <br>— Forward & Backward Chaining</li>
                            </ul>
                            <!-- <a href="#contact" class="btn btn-outline-primary btn-sm mt-auto">Lihat Detail</a> -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                            <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                                <!-- Icon for Sistem Pengambilan Keputusan: Scales icon to represent balanced decision-making -->
                                <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 3c-1.1 0-2 .9-2 2h-2v2h2v12h-2v2h6v-2h-2V7h2c0-1.1-.9-2-2-2zm-2 14v-2h4v2h-4zm8-8h-1.5l-2.5 6h-1l-2.5-6H9v2h1.5l2.5 6h1l2.5-6H18v-2z"/>
                                </svg>
                            </div>
                            <h3 class="fw-medium mb-3">Sistem Pengambilan Keputusan</h3>
                            <p class="text-muted small">
                                Bantu Anda membuat keputusan yang lebih cepat dan tepat dengan dukungan data, perhitungan, dan visualisasi yang mudah dipahami.
                            </p>
                            <ul class="list-unstyled text-muted small mb-4">
                                <li class="mb-2">✔️ Menyajikan data dan hasil perhitungan secara otomatis</li>
                                <li class="mb-2">✔️ Memberikan prediksi atau rekomendasi berdasarkan data</li>
                                <li class="mb-2">✔️ Bisa dihubungkan dengan aplikasi lain melalui API</li>
                                <li class="mb-2">✔️ Tersedia laporan dan grafik yang mudah dibaca</li>
                                <li>✔️ Mendukung berbagai metode pengambilan keputusan seperti:
                                    <br>— Simple Additive Weighting (SAW),
                                    <br>— Weighted Product (WP),
                                    <br>— Analytic Hierarchy Process (AHP),
                                    <br>— TOPSIS, dan lainnya
                                </li>
                            </ul>
                            <!-- <a href="#contact" class="btn btn-outline-primary btn-sm mt-auto">Lihat Detail</a> -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                            <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                                <!-- Icon for Aplikasi Machine Learning: Neural network icon to represent machine learning -->
                                <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2a2 2 0 00-2 2 2 2 0 002 2 2 2 0 002-2 2 2 0 00-2-2zm-6 6a2 2 0 00-2 2 2 2 0 002 2 2 2 0 002-2 2 2 0 00-2-2zm12 0a2 2 0 00-2 2 2 2 0 002 2 2 2 0 002-2 2 2 0 00-2-2zm-6 6a2 2 0 00-2 2 2 2 0 002 2 2 2 0 002-2 2 2 0 00-2-2zm-6 6a2 2 0 00-2 2 2 2 0 002 2 2 2 0 002-2 2 2 0 00-2-2zm12 0a2 2 0 00-2 2 2 2 0 002 2 2 2 0 002-2 2 2 0 00-2-2zm-9.5-12.5l3 3m0 0l3-3m-3 3v6"/>
                                </svg>
                            </div>
                            <h3 class="fw-medium mb-3">Aplikasi Machine Learning</h3>
                            <p class="text-muted small">
                                Buat aplikasi yang bisa belajar dari data dan bekerja secara otomatis, cocok untuk prediksi, klasifikasi, dan analisis cerdas.
                            </p>
                            <ul class="list-unstyled text-muted small mb-4">
                                <li class="mb-2">✔️ Model bisa disesuaikan dengan kebutuhan bisnis</li>
                                <li class="mb-2">✔️ Mampu menangani data dalam jumlah besar</li>
                                <li class="mb-2">✔️ Dokumentasi lengkap untuk penggunaan dan pengembangan</li>
                                <li class="mb-2">✔️ Cocok untuk prediksi penjualan, deteksi spam, analisis gambar, dan lainnya</li>
                                <li>✔️ Mendukung berbagai metode Machine Learning seperti:
                                    <br>— Decision Tree,
                                    <br>— K-Nearest Neighbors (KNN),
                                    <br>— Naive Bayes,
                                    <br>— Support Vector Machine (SVM),
                                    <br>— Neural Network
                                </li>
                            </ul>
                            <!-- <a href="#contact" class="btn btn-outline-primary btn-sm mt-auto">Lihat Detail</a> -->
                        </div>
                    </div>

                    <div class="col">
                        <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                            <div class="position-absolute top-0 end-0 p-2" style="background: #0ea5e9; border-radius: 0 12px 0 12px;">
                                <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h12v2H3v-2z"/></svg>
                            </div>
                            <h3 class="fw-medium mb-3">Manajemen Inventaris</h3>
                            <p class="text-muted small">
                                Pantau stok barang masuk dan keluar secara otomatis, sehingga Anda tak perlu menghitung manual lagi.
                            </p>
                            <ul class="list-unstyled text-muted small mb-4">
                                <li class="mb-2">✔️ Pencatatan stok real-time</li>
                                <li class="mb-2">✔️ Notifikasi stok menipis</li>
                                <li class="mb-2">✔️ Laporan mingguan dan bulanan</li>
                                <li class="mb-2">✔️ Multi-gudang dan multi-user</li>
                                <li>✔️ Cocok untuk toko, gudang, dan usaha skala kecil-menengah</li>
                            </ul>
                            <!-- <a href="#contact" class="btn btn-outline-primary btn-sm mt-auto">Lihat Detail</a> -->
                        </div>
                    </div>

                    <div class="col">
                        <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                            <div class="position-absolute top-0 end-0 p-2" style="background: #16a34a; border-radius: 0 12px 0 12px;">
                                <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M4 6h16v2H4V6zm0 4h10v2H4v-2zm0 4h16v6H4v-6zm2 2h12v2H6v-2z"/></svg>
                            </div>
                            <h3 class="fw-medium mb-3">Aplikasi Kasir</h3>
                            <p class="text-muted small">
                                Catat transaksi harian, cetak struk, dan kelola laporan penjualan dengan mudah dari satu sistem kasir digital.
                            </p>
                            <ul class="list-unstyled text-muted small mb-4">
                                <li class="mb-2">✔️ Transaksi cepat dan efisien</li>
                                <li class="mb-2">✔️ Riwayat penjualan lengkap</li>
                                <li class="mb-2">✔️ Cetak struk otomatis</li>
                                <li class="mb-2">✔️ Bisa digunakan offline maupun online</li>
                                <li>✔️ Cocok untuk toko, kafe, atau outlet kecil</li>
                            </ul>
                            <!-- <a href="#contact" class="btn btn-outline-primary btn-sm mt-auto">Lihat Detail</a> -->
                        </div>
                    </div>

                    <div class="col">
                        <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                            <div class="position-absolute top-0 end-0 p-2" style="background: #10b981; border-radius: 0 12px 0 12px;">
                                <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h16v2H4zm0 4h16v2H4zm0 4h10v2H4zm0 4h10v2H4z"/></svg>
                            </div>
                            <h3 class="fw-medium mb-3">Laporan Keuangan</h3>
                            <p class="text-muted small">
                                Catat pemasukan dan pengeluaran usaha Anda secara praktis dan dapatkan laporan keuangan otomatis.
                            </p>
                            <ul class="list-unstyled text-muted small mb-4">
                                <li class="mb-2">✔️ Input mudah untuk pemasukan & pengeluaran</li>
                                <li class="mb-2">✔️ Laporan laba rugi otomatis</li>
                                <li class="mb-2">✔️ Rekap keuangan harian & bulanan</li>
                                <li class="mb-2">✔️ Grafik pengeluaran dan pemasukan</li>
                                <li>✔️ Cocok untuk UMKM dan usaha rumahan</li>
                            </ul>
                            <!-- <a href="#contact" class="btn btn-outline-primary btn-sm mt-auto">Lihat Detail</a> -->
                        </div>
                    </div>

                    <div class="col">
                        <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                            <div class="position-absolute top-0 end-0 p-2" style="background: #dc2626; border-radius: 0 12px 0 12px;">
                                <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.94 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                            </div>
                            <h3 class="fw-medium mb-3">Manajemen Karyawan</h3>
                            <p class="text-muted small">
                                Kelola data karyawan, absensi, dan gaji dengan mudah dari satu dashboard yang efisien.
                            </p>
                            <ul class="list-unstyled text-muted small mb-4">
                                <li class="mb-2">✔️ Data karyawan lengkap dan tersimpan aman</li>
                                <li class="mb-2">✔️ Catat absensi dan izin secara digital</li>
                                <li class="mb-2">✔️ Hitung dan cetak slip gaji otomatis</li>
                                <li class="mb-2">✔️ Laporan bulanan instan</li>
                                <li>✔️ Cocok untuk perusahaan kecil hingga menengah</li>
                            </ul>
                            <!-- <a href="#contact" class="btn btn-outline-primary btn-sm mt-auto">Lihat Detail</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Custom Apps Section -->
<section id="custom" class="bg-light py-5 py-md-8">
    <div class="container text-center">
        <h2 class="section-title mb-4">Jasa Aplikasi Custom</h2>
        <p class="text-muted mb-5">Kami wujudkan ide Anda menjadi aplikasi yang dirancang khusus dengan teknologi mutakhir.</p>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                    <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                        <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                    </div>
                    <h3 class="fw-medium mb-3">Desain Modern</h3>
                    <p class="text-muted small">Mengusung estetika modern dengan fokus pada fungsionalitas dan pengalaman pengguna.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                    <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                        <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                    </div>
                    <h3 class="fw-medium mb-3">Teknologi Terkini</h3>
                    <p class="text-muted small">Dibangun dengan framework modern untuk performa optimal.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                    <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                        <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                    </div>
                    <h3 class="fw-medium mb-3">Proses Jelas</h3>
                    <p class="text-muted small">Laporan berkala untuk memastikan kepuasan Anda.</p>
                </div>
            </div>
        </div>
        <!-- <a href="#contact" class="btn btn-primary mt-5 px-4">Konsultasi Gratis</a> -->
    </div>
</section>

<section id="technologies" class="py-5 py-md-8 bg-light">
    <div class="container text-center">
        <h2 class="section-title mb-4">Solusi Pengembangan Aplikasi Kami</h2>
        <p class="text-muted mb-5">Kami menawarkan pengembangan aplikasi web dan mobile menggunakan teknologi terbaik untuk memenuhi kebutuhan Anda.</p>
        <div class="row g-4">
<div class="col-md-4">
    <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
        <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
            <!-- Icon for Python: Python logo-inspired snake icon -->
            <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                <path d="M11.99 2C8.13 2 5 3.57 5 6.86v4.29c0 1.14.74 2.14 1.72 2.71-.98.57-1.72 1.57-1.72 2.71v4.29c0 3.29 3.13 4.86 6.99 4.86s6.99-1.57 6.99-4.86v-4.29c0-1.14-.74-2.14-1.72-2.71.98-.57 1.72-1.57 1.72-2.71V6.86C18.98 3.57 15.85 2 11.99 2zm-1.43 4.29h2.86v2.86h-2.86V6.29zm1.43 11.43c-1.57 0-2.86 1.29-2.86 2.86s1.29 2.86 2.86 2.86 2.86-1.29 2.86-2.86-1.29-2.86-2.86-2.86z"/>
            </svg>
        </div>
        <h3 class="fw-medium mb-3">Python</h3>
        <p class="text-muted small">Aplikasi web yang kuat dan skalabel menggunakan Python, ideal untuk sistem informasi dan machine learning.</p>
    </div>
</div>
<div class="col-md-4">
    <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
        <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
            <!-- Icon for PHP & Laravel: PHP elephant-inspired icon -->
            <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm0 16c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zm-2-10h4v2h-4v-2zm0 3h4v2h-4v-2zm-2 3h8v2h-8v-2z"/>
            </svg>
        </div>
        <h3 class="fw-medium mb-3">PHP & Laravel</h3>
        <p class="text-muted small">Bangun aplikasi web dinamis dan aman dengan PHP dan framework Laravel yang modern.</p>
    </div>
</div>
<div class="col-md-4">
    <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
        <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
            <!-- Icon for JavaScript: JS logo-inspired icon -->
            <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                <path d="M3 3h18v18H3V3zm16 16V5H5v14h14zM9.5 15c0 1.1-.9 2-2 2s-2-.9-2-2h2v-2H6c-.6 0-1 .4-1 1s.4 1 1 1h1.5c.3 0 .5.2.5.5s-.2.5-.5.5H5v2h2.5c1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5H6v-2h3.5v2zm6.5 0c0 1.1-.9 2-2 2s-2-.9-2-2h2v-2h-1c-.6 0-1 .4-1 1s.4 1 1 1h1c.3 0 .5.2.5.5s-.2.5-.5.5h-1.5v2h1.5c1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5h-1v-2h3v2z"/>
            </svg>
        </div>
        <h3 class="fw-medium mb-3">JavaScript</h3>
        <p class="text-muted small">Aplikasi web interaktif dengan JavaScript untuk pengalaman pengguna yang responsif dan modern.</p>
    </div>
</div>
<div class="col-md-4">
    <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
        <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
            <!-- Icon for Flutter: Flutter logo-inspired butterfly icon -->
            <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.5 2h-5l4.5 7.5L9.5 17h5l-4.5 5h5l4.5-7.5L15.5 7h-5l4.5-5z"/>
            </svg>
        </div>
        <h3 class="fw-medium mb-3">Flutter</h3>
        <p class="text-muted small">Aplikasi mobile lintas platform dengan Flutter untuk performa cepat dan UI yang menarik.</p>
    </div>
</div>
<div class="col-md-4">
    <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
        <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
            <!-- Icon for React: React logo-inspired atom-like icon -->
            <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm0-12c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-5 5c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-5 5c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
            </svg>
        </div>
        <h3 class="fw-medium mb-3">React</h3>
        <p class="text-muted small">Aplikasi web modern dan efisien dengan React, mendukung komponen reusable dan UI interaktif.</p>
    </div>
</div>
        </div>
        <!-- <a href="#contact" class="btn btn-primary mt-5 px-4">Konsultasi Teknologi</a> -->
    </div>
</section>

    <!-- Why Us Section -->
<section id="why-us" class="py-5 py-md-8">
    <div class="container text-center">
        <h2 class="section-title mb-4">Keunggulan Kami</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                    <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                        <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                    </div>
                    <h3 class="fw-medium mb-3">Harga Terjangkau</h3>
                    <p class="text-muted small">Kualitas tinggi dengan biaya yang ramah di kantong.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                    <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                        <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                    </div>
                    <h3 class="fw-medium mb-3">Fitur Lengkap</h3>
                    <p class="text-muted small">Aplikasi dengan fitur canggih sesuai kebutuhan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                    <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                        <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                    </div>
                    <h3 class="fw-medium mb-3">Dukungan Purna Jual</h3>
                    <p class="text-muted small">Revisi gratis dan support teknis berkelanjutan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                    <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                        <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                    </div>
                    <h3 class="fw-medium mb-3">Source Code</h3>
                    <p class="text-muted small">Dapatkan source code untuk fleksibilitas Anda.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100 border-0 shadow-sm position-relative overflow-hidden" style="background: linear-gradient(145deg, #ffffff, #f1f5f9);">
                    <div class="position-absolute top-0 end-0 p-2" style="background: #4f46e5; border-radius: 0 12px 0 12px;">
                        <svg class="text-white" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                    </div>
                    <h3 class="fw-medium mb-3">Tim Profesional</h3>
                    <p class="text-muted small">Dikembangkan oleh ahli berpengalaman.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Section -->
    <section id="contact" class="hero text-white py-5 py-md-8">
        <div class="container text-center">
            <h2 class="section-title mb-4">Siap Wujudkan Proyek Anda?</h2>
            <p class="text-white mb-5">Hubungi kami untuk konsultasi gratis atau pesan aplikasi sekarang.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="https://wa.me/6282250223147" class="btn btn-outline-light px-4 py-2 d-flex align-items-center">
                    <svg class="me-2" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12c0 2.627.853 5.067 2.293 7.02L0 24l5.146-2.267A11.951 11.951 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-5.523 0-10-4.477-10-10S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm5.671-13.671c-.324-.324-.853-.486-1.414-.486H8.743c-.561 0-1.09.162-1.414.486l-.586.586c-.324.324-.486.853-.486 1.414v4.743c0 .561.162 1.09.486 1.414l.586.586c.324.324.853.486 1.414.486h7.514c.561 0 1.09-.162 1.414-.486l.586-.586c.324-.324.486-.853.486-1.414V9.329c0-.561-.162-1.09-.486-1.414l-.586-.586zM12 20c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"/></svg>
                    WhatsApp
                </a>
                <a href="mailto:akmalthemalong@gmail.com" class="btn btn-outline-light px-4 py-2 d-flex align-items-center">
                    <svg class="me-2" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12.713l11.287-7.426C22.607 4.84 21.822 4.5 21 4.5H3c-.822 0-1.607.34-2.287.987L12 12.713zm0 1.574L.713 6.86C0.254 7.46 0 8.21 0 9v10c0 1.657 1.343 3 3 3h18c1.657 0 3-1.343 3-3V9c0-.79-.254-1.54-.713-2.14L12 14.287z"/></svg>
                    Email
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p class="small">© 2025 Aplikasita. All rights reserved.</p>
            <p class="small text-muted">Mewujudkan aplikasi impian Anda.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
