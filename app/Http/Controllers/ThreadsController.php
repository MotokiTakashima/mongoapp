<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Threads;

class ThreadsController extends Controller
{
    function index()
    {
        $threads = Threads::all();
        ddd($threads);
        return view('index', ['threads' => $threads]);
    }
}
