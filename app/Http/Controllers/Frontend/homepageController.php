<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles;

class homepageController extends Controller
{
    public function index ()
    {
        $article = Articles::paginate(6);
        return view("pages.homepage",[
            'article' => $article
        ]);
    }
}
