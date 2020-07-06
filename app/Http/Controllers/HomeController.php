<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// Import DB Artikel
use App\Models\Artikel;
// Import DB Video
use App\Models\Video;
// Import DB Team
use App\Models\Team;

class HomeController extends Controller
{
    // READ
    public function index()
    {
        $artikel = Artikel::with('user')->latest()->first();
        $video   = Video::with('user')->latest()->first();

        $artikels= Artikel::with('user')->orderBy('id', 'DESC')->paginate(6); 
        $videos= Video::with('user')->orderBy('id', 'DESC')->paginate(4); 

        $teams = Team::orderBy('id', 'DESC')->get();

        // API KawalCorona
        $indonesia = Http::get('https://api.kawalcorona.com/indonesia');
        $provinsis = Http::get('https://api.kawalcorona.com/indonesia/provinsi');

        $globals          = Http::get('https://api.kawalcorona.com/');
        $global_positif   = Http::get('https://api.kawalcorona.com/positif');
        $global_sembuh    = Http::get('https://api.kawalcorona.com/sembuh');
        $global_meninggal = Http::get('https://api.kawalcorona.com/meninggal');


        $indonesia = $indonesia->json();
        $provinsis = $provinsis->json();

        $globals          = $globals->json();
        $global_positif   = $global_positif->json();
        $global_sembuh    = $global_sembuh->json();
        $global_meninggal = $global_meninggal->json();

        return view('pages.home', 
            compact('artikel', 'video', 'artikels', 'videos', 'teams', 'indonesia','provinsis', 'globals','global_positif', 'global_sembuh', 'global_meninggal')
        );
    }

    // SHOW ARTIKEL
    public function show_artikel($slug)
    {
        $artikel = Artikel::with('user')->where('slug', $slug)->first();

        return view('pages.show_artikel', compact('artikel'));
    }

    // SHOW VIDEO
    public function show_video($slug)
    {
        $video = Video::with('user')->where('slug', $slug)->first();

        return view('pages.show_video', compact('video'));
    }

    public function provinsi(Request $request)
    {
        dd($request->provinsi);

        $provinsis = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $provinsis = $provinsis->json();


    }
}
