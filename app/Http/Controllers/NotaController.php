<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class NotaController extends Controller
{

    public function cetak(Project $project)
    {
        $project->load('customer', 'payments'); // preload relasi

        return view('nota', compact('project'));
    }

}
