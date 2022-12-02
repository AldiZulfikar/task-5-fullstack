<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Articles::all();

        return view("admin.article.index", [
            'article' => $article
        ]);
    }
    
    public function add()
    {
        $category = Category::all();
        return view("admin.article.add", ['category'=>$category]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|max:5012',
            'title' => 'required',
            'content' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['image'] = $request->file('image')->store('Articles');
        Articles::create($data);

        return redirect()->route('admin-article-admin')->with('message','success');
    }

    public function edit($id)
    {
        $article = Articles::find($id);
        $category = Category::all();
        return view("admin.article.edit", [
            'article' => $article,
            'category'=>$category
        ]);
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('image'))){
            $article = Articles::find($id);
            $article->update([
                'title' => $request->title,
                'content' => $request->content,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-article-admin')->with('message','success');
        }else{
            $article = Articles::find($id);
            Storage::delete($article->image);
            $article->update([
                'image' => $request->file('image')->store('Articles'),
                'title' => $request->title,
                'content' => $request->content,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-article-admin')->with('message','success');
        }
    }

    public function delete($id)
    {
        $article = Articles::find($id);

        Storage::delete($article->image);

        $article->delete($id);

        return redirect()->route('admin-article-admin')->with('message','success');
    }
}
