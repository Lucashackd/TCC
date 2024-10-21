<?php

namespace App\Http\Controllers;

use App\Models\Flag;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    private $video;

    public function __construct()
    {
        $this->video = new Video();
    }

    // Retorna página de visualização conjunta de todos os vídeos no db
    public function index()
    {
        return view('welcome', ['videos' => Video::all()->sortByDesc('created_at')]);
    }

    // Retorna página de vicualização única de vídeo por seu id
    public function show($id)
    {
        $videoFlags = Flag::whereHas('videos', function ($query) use ($id) {
            $query->where('id', $id);
        })->get();
        return view('video.show', ['videos' => Video::find($id), $videoFlags]);
    }

    // Salva vídeo no db
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'video' => 'required|mimes:mp4|max:20000'
        ]);

        $video = $request->file('video');
        $videoName = time() . '.' . $video->extension();
        $video->move(public_path('videos'), $videoName);

        $this->video->title = $request->title;
        $this->video->description = $request->description;
        $this->video->video = $videoName;
        $this->video->user_id = auth()->user()->id;
        $this->video->save();

        return redirect()->route('home')->with('success', 'Video uploaded successfully');
    }

    // Retorna página de criação de vídeo
    public function create()
    {
        return view('video.upload', ['flags' => Flag::all()]);
    }
}
