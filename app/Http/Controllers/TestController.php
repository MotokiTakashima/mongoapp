<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\theads;

class TestController extends Controller
{
    function index(){
        $threads = Theads::orderBy('_id', 'desc')->get();
        return view('index', ['threads' => $threads]);
    }
}
