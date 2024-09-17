<?php

namespace App\Http\Controllers\Api;

use App\Models\Video;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $videos = Video::all();
        return response()->json([
            'status' => true,
            'videos' => $videos
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $video = Video::create([
                'title' => $request->title,
                'description' => $request->description,
                'path' => $request->path,
                'user_id' => Auth::user()->id,
            ]);
            DB::commit();

            return response()->json([
                'status' => true,
                'video' => $video,
                'message' => 'Vídeo cadastrado com sucesso',
            ], 201);
        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => 'Vídeo não cadastrado',
                'erro' => $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        return response()->json([
            'status' => true,
            'video' => $video
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        DB::beginTransaction();

        try {
            if (Auth::user()->id === $video->user_id) {
                $video->update($request->all());
                DB::commit();

                return response()->json([
                    'status' => true,
                    'video' => $video,
                    'message' => 'Vídeo atualizado com sucesso',
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'video' => Auth::user()->id,
                    'message' => 'O usuário não possuí permissões para esse vídeo',
                ], 403);
            }

        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'video' => $video,
                'message' => 'Vídeo não foi atualizado',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        try {
            if (Auth::user()->id === $video->user_id) {
                $video->delete();

                return response()->json([
                    'status' => true,
                    'video' => $video,
                    'message' => 'Vídeo deletado com sucesso',
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'video' => Auth::user()->id,
                    'message' => 'O usuário não possuí permissões para esse vídeo',
                ], 403);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Vídeo não foi deletado',
            ], 400);
        }
    }
}
