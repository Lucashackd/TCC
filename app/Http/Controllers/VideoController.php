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
}
