<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pembayaran</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            padding: 40px;
            max-width: 900px;
            margin: 0 auto;
        }

        .container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: #1e3a8a;
            color: white;
            padding: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header img {
            height: 40px;
        }

        .content {
            padding: 32px;
        }

        .title {
            color: #1e3a8a;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #475569;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 24px;
        }

        .customer-info {
            background: #f1f5f9;
            padding: 16px;
            border-radius: 8px;
            margin-bottom: 24px;
        }

        .customer-info p {
            color: #475569;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 8px;
        }

        .customer-info strong {
            color: #1e40af;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
        }

        th, td {
            padding: 12px 16px;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: #f1f5f9;
            color: #1e40af;
            font-weight: 600;
        }

        td {
            border-bottom: 1px solid #e2e8f0;
            color: #475569;
        }

        .text-right {
            text-align: right;
        }

        .payment-history {
            margin-top: 32px;
        }

        .footer {
            color: #64748b;
            font-size: 12px;
            padding: 24px;
            border-top: 1px solid #e2e8f0;
        }

        @media print {
            body {
                background: white;
                padding: 0;
            }
            .container {
                box-shadow: none;
            }
        }

        .badge {
            display: inline-block;
            padding: 4px 8px;
            font-size: 12px;
            font-weight: 600;
            border-radius: 9999px;
            color: #fff;
        }

        .badge.bg-primary {
            background-color: #1e3a8a; /* biru */
        }

        .badge.bg-success {
            background-color: #16a34a; /* hijau */
        }

        .badge.bg-danger {
            background-color: #dc2626; /* merah */
        }

        .badge.bg-warning {
            background-color: #f59e0b; /* kuning */
            color: #1e293b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                <h1 style="font-size: 20px; font-weight: 600;">Informasi Harga Aplikasi</h1>
            </div>
        </div>

        <div class="content">
            <h2 class="title">Aplikasi: {{ $project->title }}</h2>

            <div class="customer-info">
                <p><strong>Nama Pemesan:</strong> {{ $project->customer->name }}</p>

                {{--
                <p><strong>Email:</strong> {{ $project->customer->email ?? '-' }}</p>
                <p><strong>Telepon:</strong> {{ $project->customer->phone ?? '-' }}</p>
                <p><strong>Alamat:</strong> {{ $project->customer->address ?? '-' }}</p>
                --}}
            </div>

            {{-- Daftar fitur --}}
            @if($project->features->count())
                <h3 class="subtitle">Fitur yang Dipesan</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Fitur</th>
                            <th>Deskripsi</th>
                            <th class="text-right">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($project->features as $feature)
                            <tr>
                                <td>{{ $feature->name }}</td>
                                <td>{{ $feature->description ?? '-' }}</td>
                                <td class="text-right">
                                    @if (floatval($feature->price) == 0)
                                        <span class="badge bg-primary">Gratis</span>
                                    @else
                                        Rp {{ number_format($feature->price, 0, ',', '.') }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <table>
                <tr>
                    <th style="width: 400px;">Biaya Pengerjaan, Revisi, Instalasi, Konsultasi (semua yang berkaitan dengan aplikasi)</th>
                    <td class="text-right">Rp {{ number_format(1000000, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Total Harga </th>
                    <td class="text-right">Rp {{ number_format($project->price, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Total Dibayar</th>
                    <td class="text-right">Rp {{ number_format($project->total_paid, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Status Pembayaran</th>
                    <td class="text-right">
                        <span class="badge bg-{{ $project->payment_status->getColor() }}">
                            {{ ucfirst($project->payment_status->value) }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>Status Proyek</th>
                    <td class="text-right">
                        <span class="badge bg-{{ $project->status->getColor() }}">
                            {{ ucfirst($project->status->value) }}
                        </span>
                    </td>
                </tr>
            </table>

            @if($project->payments->count())
                <div class="payment-history">
                    <h3 class="subtitle">Riwayat Pembayaran</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project->payments as $payment)
                                <tr>
                                    <td>{{ $payment->paid_at->format('d-m-Y') }}</td>
                                    <td class="text-right">Rp {{ number_format($payment->amount, 0, ',', '.') }}</td>
                                    <td>{{ $payment->note }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <div class="footer">
            <p>Catatan:</p>
            <p>
Penambahan fitur sederhana sudah termasuk dalam biaya revisi.
Namun, untuk penambahan fitur yang bersifat kompleks, akan dikenakan biaya tambahan yang disesuaikan dengan tingkat kesulitan fitur yang diminta.
            </p>

                <br>
                <br>
                <p>

            Dicetak pada {{ now()->format('d-m-Y H:i') }}
                </p>

        </div>
    </div>
</body>
</html>
