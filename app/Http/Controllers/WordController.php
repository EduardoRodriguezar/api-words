<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Word;

class WordController extends Controller
{
    public function index()
    {
        return Word::with(['category', 'options'])->get();
    }

    public function show($id)
    {
        return Word::with(['category', 'options'])->findOrFail($id);
    }

}

