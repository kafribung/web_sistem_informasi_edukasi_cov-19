<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Class VideoRequest
use App\Http\Requests\VideoRequest;
// Impot Class Str
use Illuminate\Support\Str;

// Import DB Video
use App\Models\Video;

class VideoController extends Controller
{
    // READ
    public function index()
    {
        $videos = Video::orderBy('id', 'DESC')->get();

        return view('dashboard.video', compact('videos'));
    }

    // CREATE
    public function create()
    {
        return view('dashboard_create.video_create');
    }

    //CREATE
    public function store(VideoRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->title);

        $request->user()->videos()->create($data);

        return redirect('/video')->with('msg', 'Data Video Berhasil Ditambhakan');
    }

    // SHOW 
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($slug)
    {
        $video = Video::where('slug', $slug)->first();

        return view('dashboard_edit.video_edit', compact('video'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title'       => ['required', 'string', 'min:3' , 'max:255'],
            'video'       => ['required', 'url'],
            'description' => ['required', 'min:3']
        ]);

        $data['slug'] = Str::slug($request->title);
        
        Video::findOrFail($id)->update($data);

        return redirect('/video')->with('msg', 'Data Video Berhasil Diedit');
    }

    // DELETE
    public function destroy($id)
    {
        Video::destroy($id);

        return redirect('/video')->with('msg', 'Data Video Berhasil DiHapus');
    }
}
