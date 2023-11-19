<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datamahasiswa;

class DatamahasiswaController extends Controller
{
    public function index()
    {
        $dataMahasiswa = Datamahasiswa::getDataPosts();
        return view('datamahasiswa', compact('dataMahasiswa'));
    }

    public function showKrs($nim)
    {
        $data = Datamahasiswa::getDataByNIM($nim);
        return view('DetailDataMahasiswa', $data);
    }
}
