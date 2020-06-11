<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Class AdminRequest
use App\Http\Requests\AdminRequest;
// Import Class Hash
use Illuminate\Support\Facades\Hash;

// Import Db User
use App\Models\User;


class AdminController extends Controller
{
    // READ
    public function index()
    {   $users = User::orderBy('id', 'DESC')->get();

        return view('dashboard.admin', compact('users'));
    }

    // CREATE
    public function create()
    {
        return view('dashboard_create.admin_create');
    }

    // STORE
    public function store(AdminRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['role']     = 1;

        User::create($data);

        return redirect('/admin')->with('msg', 'Data Admin Berhasil Ditambahkan !'); 
    }

    // SHOW
    public function show($id)
    {
        return abort('404');
    }

    // EDIT    
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('dashboard_edit.admin_edit', compact('user'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $data['password'] = Hash::make($request->password);

        User::findOrFail($id)->update($data);

        return redirect('/admin')->with('msg', 'Data Admin Berhasil Diperbaruhi !'); 
    }

    // DELETE
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/admin')->with('msg', 'Data Admin Berhasil DiHapus !');
    }
}
