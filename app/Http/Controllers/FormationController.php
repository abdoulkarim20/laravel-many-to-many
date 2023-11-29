<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function liste()
    {
        $formations = Formation::all();
        return view('formation.liste', compact("formations"));
    }

    public function add()
    {
        return view('formation.add');
    }

    public function detail($id)
    {
        $foramtion = Formation::find($id);
        /* dd($foramtion); */
        return view('formation.detail', compact('foramtion'));
    }
}
