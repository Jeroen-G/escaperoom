<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordMatchController extends Controller
{
    public function index()
    {
        return view('wordmatch.index')->withAnswerIsRight(null);
    }

    public function store(Request $request)
    {
        if ($request->word == env('WORD')) {
            return view('wordmatch.index')->withAnswerIsRight(true)->withAnswer(env('WORD_ANSWER'));
        }

        return view('wordmatch.index')->withAnswerIsRight(false);
    }
}
