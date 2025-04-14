<?php

namespace App\Http\Controllers;

use App\Models\Option;

class OptionController extends Controller
{
    public function index()
    {
        return response()->json(Option::all());
    }
}
