<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class NotaController extends Controller
{

    public function cetak(Project $project)
    {
        $project->load([
            'customer',
            'features' => function($q) {
                $q->orderBy('price', 'asc');
            },
            'payments'
        ]); // preload relasi

        $pdf = Pdf::loadView('nota', compact('project'));

        return $pdf->download('laporan_data_petani_' . date('d_m_Y') . '.pdf');

        // return view('nota', compact('project'));
    }

}
