<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Import DB Artikel
use App\Models\Artikel;

class ArtikelController extends Controller
{
    //
    public function index()
    {
        $datas = Artikel::orderBy('id', 'desc')->get();

        if (!empty($datas)) {
            return JsonFormatter::success($datas, 'Data berhasil ditampilkan');

        } else return JsonFormatter::failed('Data gagal ditampilkan');
    }
}
