<?php

namespace App\Http\Controllers;
// Import Class Request
use App\Http\Requests\MotivasiRequest;

// Import Model Motivasi
use App\Models\Motivasi;

class MotivasiController extends Controller
{
    // READ
    public function index()
    {
        $motivasis = Motivasi::latest()->get();

        return view('dashboard.motivasi', compact('motivasis'));
    }

    // CREATE
    public function create()
    {
        return view('dashboard_create.motivasi_create');
    }

    // STORE    
    public function store(MotivasiRequest $request)
    {
        $data = $request->all();

        Motivasi::create($data);

        return redirect('/motivasi')->with('msg', 'Data motivasi berhasil ditambahkan');
    }

    // SHOW
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($id)
    {
        $motivasi = Motivasi::findOrFail($id);

        return view('dashboard_edit.motivasi_edit', compact('motivasi'));
    }

    // UPDATE
    public function update(MotivasiRequest $request, $id)
    {
        $data = $request->all();

        Motivasi::findOrFail($id)->update($data);

        return redirect('/motivasi')->with('msg', 'Data motivasi berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        Motivasi::destroy($id);

        return redirect('/motivasi')->with('msg', 'Data motivasi berhasil dihapus');
    }
}
