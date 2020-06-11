<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Class AdminRequest
use App\Http\Requests\ArtikelRequest;
// Impot Class Str
use Illuminate\Support\Str;

// Import DB Artikel
use App\Models\Artikel;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::orderBy('id', 'DESC')->get();

        return view('dashboard.artikel', compact('artikels'));
    }

    // CREATE
    public function create()
    {
        return view('dashboard_create.artikel_create');
    }

    // STORE
    public function store(ArtikelRequest $request)
    {
        $data = $request->all();

        if ($request->has('img')) {
            $img  = $request->file('img');
            $name = time(). '.' .$img->getClientOriginalExtension(); 
            $img->move(public_path('artikels'), $name);

            $data['img'] = $name; 
        }

        $data['slug'] = Str::slug($request->title);

        $request->user()->artikels()->Create($data);

        return redirect('/artikel')->with('msg', 'Data Artikel Berhasil Ditambahkan');
    }

    // SHOW
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();

        return view('dashboard_edit.artikel_edit', compact('artikel'));

    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title'       => ['required', 'string', 'min:3' , 'max:255'],
            'img'         => ['mimes:png,jpg,jpeg'],
            'description' => ['required', 'min:3']
        ]);

        if ($request->has('img')) {
            $img  = $request->file('img');
            $name = time(). '.' .$img->getClientOriginalExtension(); 
            $img->move(public_path('artikels'), $name);

            $data['img'] = $name; 
        }

        $data['slug'] = Str::slug($request->title);

        Artikel::findOrFail($id)->update($data);

        return redirect('/artikel')->with('msg', 'Data Artikel Berhasil Diedit');
    }

    // DELETE
    public function destroy($id)
    {
        Artikel::destroy($id);

        return redirect('/artikel')->with('msg', 'Data Artikel Berhasil Dihapus');
    }
}
