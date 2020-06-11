<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Class TeamRequest
use App\Http\Requests\TeamRequest;

// Import DB Team
use App\Models\Team;

class TeamController extends Controller
{
    // READ
    public function index()
    {
        $teams =  Team::orderBy('id', 'DESC')->get();
        return view('dashboard.team', compact('teams')) ;
    }

    // CREATE
    public function create()
    {
        return view('dashboard_create.team_create');
    }

    // STORE
    public function store(TeamRequest $request)
    {
        $data = $request->all();

        if ($request->has('img')) {
            $img = $request->file('img');
            $name= time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('teams'), $name);

            $data['img'] = $name;
        }

        Team::create($data);

        return redirect('/team')->with('msg', 'Data Team Berhasil Ditambahkan');
    }

    // SHOW
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($id)
    {
        $team = Team::findOrFail($id);

        return view('dashboard_edit.team_edit', compact('team'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'nim'  => ['required', 'string', 'min:11', 'max:15'],
            'img'  => ['mimes:png,jpg,jpeg'],
            'job'  => ['required', 'string', 'min:3', 'max:255'],
        ]);

        if ($request->has('img')) {
            $img = $request->file('img');
            $name= time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('teams'), $name);

            $data['img'] = $name;
        }

        Team::findOrFail($id)->update($data);

        return redirect('/team')->with('msg', 'Data Team Berhasil Diupdate');
    }

    // DELETE
    public function destroy($id)
    {
        Team::destroy($id);

        return redirect('/team')->with('msg', 'Data Team Berhasil Dihapus');
    }
}
