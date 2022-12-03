<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Category;

class homepageController extends Controller
{
    public function index ()
    {
        $article = Articles::paginate(6);
        $category = Category::all();
        return view("pages.homepage",[
            'article' => $article,
            'category'=>$category
        ]);
    }
}
