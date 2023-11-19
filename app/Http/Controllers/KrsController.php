<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Krs;

class KrsController extends Controller
{
    public function index() {
        return view('Viewkrs', [
            "KodeMatkul" => "Post",
            "posts" => Krs::all()
            ]);
    }
}
