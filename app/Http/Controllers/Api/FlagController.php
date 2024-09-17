<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Flag;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FlagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $flags = Flag::all();
        return response()->json([
            'status' => true,
            'flags' => $flags
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        DB::beginTransaction();

        try {
            $flag = Flag::create($request->all());
            DB::commit();

            return response()->json([
                'status' => true,
                'flag' => $flag,
                'message' => 'Usuário cadastrado com sucesso',
            ], 201);
        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => 'Usuário não cadastrado',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Flag $flag): JsonResponse
    {
        return response()->json([
            'status' => true,
            'flag' => $flag
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flag $flag)
    {
        DB::beginTransaction();

        try {
            $flag->update($request->all());
            DB::commit();

            return response()->json([
                'status' => true,
                'flag' => $flag,
                'message' => 'Flag atualizada com sucesso',
            ], 200);
        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'flag' => $flag,
                'message' => 'Flag não foi atualizada',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flag $flag)
    {
        try {
            $flag->delete();

            return response()->json([
                'status' => true,
                'flag' => $flag,
                'message' => 'Flag deletado com sucesso',
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Flag não foi deletado',
            ], 400);
        }
    }
}
