<div class="container" style="margin-top: 100px;">
    <div class="card shadow-sm p-4">
        {{-- Header --}}
        <div class="mb-4 text-center">
            <h1 class="h4 fw-bold">Progres Aplikasi</h1>
        </div>

        {{-- Konten --}}
        <div>
            <h2 class="h5 mb-3">Aplikasi: {{ $project->title }}</h2>

            <div class="mb-3">
                <p class="mb-1"><strong>Nama Pemesan:</strong> {{ $project->customer->name }}</p>
            </div>

            <!-- progres -->
            <div class="mb-4">
                <h3 class="h6 fw-semibold mb-2">Progres Pembangunan</h3>
                <div class="progress" style="height: 25px;">
                    <div class="progress-bar bg-primary role="progressbar" style="width: {{ $project->progress }}%;" aria-valuenow="{{ $project->progress }}" aria-valuemin="0" aria-valuemax="100">
                        {{ $project->progress }}%
                    </div>
                </div>
            </div>

            {{-- Daftar fitur --}}
            @if($project->features->count())
                <h3 class="h6 fw-semibold mb-2">Fitur yang Dipesan</h3>
                <div class="table-responsive mb-3">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Fitur</th>
                                <th class="text-end">Harga</th>
                                <th class="text-end">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project->features as $feature)
                                <tr>
                                    <td>{{ $feature->name }}</td>
                                    <td class="text-end">
                                        @if (floatval($feature->price) == 0)
                                            <span class="badge bg-primary">Gratis</span>
                                        @else
                                            Rp {{ number_format($feature->price, 0, ',', '.') }}
                                        @endif
                                    </td>
            <td class="text-end">
            @if ($feature->pivot->is_completed)
                <span class="badge bg-success">Selesai</span>
            @else
                <span class="badge bg-warning text-dark">Dalam Proses</span>
            @endif

            </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

            {{-- Ringkasan Harga --}}
            <div class="table-responsive mb-3">
                <table class="table table-sm table-bordered">
                    <tr>
                        <th>Total Harga</th>
                        <td class="text-end">Rp {{ number_format($project->price, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th>Total Dibayar</th>
                        <td class="text-end">Rp {{ number_format($project->total_paid, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th>Status Pembayaran</th>
                        <td class="text-end">
                            <span class="badge bg-{{ $project->payment_status->getColor() }}">
                                {{ ucfirst($project->payment_status->value) }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th>Status Proyek</th>
                        <td class="text-end">
                            <span class="badge bg-{{ $project->status->getColor() }}">
                                {{ ucfirst($project->status->value) }}
                            </span>
                        </td>
                    </tr>
                </table>
            </div>

            {{-- Riwayat Pembayaran --}}
            @if($project->payments->count())
                <h3 class="h6 fw-semibold mb-2">Riwayat Pembayaran</h3>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Tanggal</th>
                                <th class="text-end">Jumlah</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project->payments as $payment)
                                <tr>
                                    <td>{{ $payment->paid_at->format('d-m-Y') }}</td>
                                    <td class="text-end">Rp {{ number_format($payment->amount, 0, ',', '.') }}</td>
                                    <td>{{ $payment->note }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

    </div>
</div>
