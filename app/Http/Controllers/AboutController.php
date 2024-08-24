<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return view('about.index');
    }
}
