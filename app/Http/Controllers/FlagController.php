<?php

namespace App\Http\Controllers;

use App\Models\Flag;
use Illuminate\Http\Request;

class FlagController extends Controller {
    private $flag;

    public function __construct() {
        $this->flag = new Flag();
    }

    public function index() {
        return view('flag.index', ['flags' => Flag::all()]);
    }

    public function show($id) {
        return view('flag.show', ['flags' => Flag::find($id)]);
    }
}
