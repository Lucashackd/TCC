<?php

namespace App\Http\Controllers;

use App\Models\Flag;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        try {
            if ($request->file('video')->isValid()) {
                $videoPath = $request->file('video')->store('videos', 's3');
            } else {
                // Trate o erro de upload
                return response()->json(['error' => 'Erro no upload do vídeo'], 400);
            }

            if ($request->file('thumbnail')->isValid()) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 's3');
            } else {
                // Trate o erro de upload
                return response()->json(['error' => 'Erro no upload da miniatura'], 400);
            }
            if ($videoPath && $thumbnailPath) {
                Video::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'path' => $videoPath,
                    'thumbnail' => $thumbnailPath,
                    'user_id' => Auth::id(),
                ]);
            }
            dd('Vídeo salvo com sucesso');
            // return view('video.show', ['videos' => Video::find($this->video->id)]);
        } catch (\Exception $e) {
            dd($e);
        }
        // dd($path);
        // dd(Storage::cloud()->temporaryUrl($path, now()->addMinutes(5)));
    }

    // Retorna página de criação de vídeo
    public function create()
    {
        return view('video.upload', ['flags' => Flag::all()]);
    }
}
