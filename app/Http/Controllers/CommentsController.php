<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentsController extends Controller
{

    public function index() {
        $comments = Comment::all();
        return view('welcome', [
            'comments' => $comments,
        ]);
    }

    public function store() {
        request()->validate([
            'content' => ['required'],
        ]);

        Comment::create([
            'name' => 'Louis',
            'url' => 'url',
            'body' => request('content'),
        ]);

        return('Votre commentaire a bien été ajouté');
    }
}
