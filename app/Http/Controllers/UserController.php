<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function index() {
        return view('user.index', ['users' => User::all()]);
    }

    public function show($id) {
        return view('user.show', ['users' => User::find($id)]);
    }

    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        $newUser = $request->all();
        if (User::create($newUser)) {
            return redirect('/users');
        } else {
            dd('Erro ao cadastrar usuário');
        }
    }

    public function edit($id) {
        $searchId = User::find($id);
        if (!$searchId) {
            dd("User not found");
        }
        return view('user.edit', ['user' => $searchId]);
    }

    public function update(Request $request, $id) {
        $editUser = $request->all();
        if (!User::find($id)->update($editUser)) {
            dd("Erro ao atualizar usuário $id");
        } else {
            return redirect('/users');
        }
    }

    public function delete($id) {
        return view('user.delete_confirmation', ['user' => User::find($id)]);
    }

    public function confirm_delete(Request $request, $id)
    {
        if ($request->confirm === "Deletar") {
            if (!User::destroy($id)) {
                dd("Erro ao deletar usuário $id");
            }
        }
        return redirect('/users');
    }
}
