<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function index()
  {
    $comments = Comment::get();
    dd($comments);
  }
}
