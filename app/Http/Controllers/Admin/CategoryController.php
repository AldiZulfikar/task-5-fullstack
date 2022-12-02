<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view("admin.category.index", [
            'category' => $category
        ]);
    }

    public function add()
    {
        return view("admin.category.add");
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $this->validate($request,[
            'name' => 'required|max:50'
        ]);

        $data['user_id'] = Auth::id();

        $category = Category::create($data);

        return redirect()->route('admin-category-admin')->with('message','success');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view("admin.category.edit", [
            'category'=>$category
        ]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return redirect()->route('admin-category-admin')->with('message','success');
    }


    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete($id);

        return redirect()->route('admin-category-admin')->with('message','success');
    }
}
