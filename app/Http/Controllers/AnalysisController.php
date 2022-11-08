<?php

namespace App\Http\Controllers;

use App\Models\Analysis;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{

    public function all()
    {
        return response()->json(Analysis::all());
    }
}
