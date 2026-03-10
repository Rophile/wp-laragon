<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function index()
    {
        // Mengambil semua data mahasiswa dari database
        $matkul = Matkul::all();
        // Mengirim data ke view
        return view('matkul.index', compact('matkul'));
    }
}
