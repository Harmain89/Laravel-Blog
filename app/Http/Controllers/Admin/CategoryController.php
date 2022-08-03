<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HTTP\Requests\Admin\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', ['data'=>$category]);
    }
    
    public function create()
    {
        return view('admin.category.create');
    }
    
    public function store(CategoryFormRequest $req)
    {
        $data = $req->validated();

        $category = new Category;

        $category->name = $data['name'];
        $category->slug = Str::slug($data['slug']);
        $category->description = $data['description'];
        if($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $category->image = $filename;
        }
        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keyword = $data['meta_keyword'];
        $category->navbar_status = $req->navbar_status == true ? '1':'0';
        $category->status = $req->status == true ? '1':'0';
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('admin/category')->with('status',
        'Category Added Successfully');
    }

    public function update(CategoryFormRequest $req)
    {
        
        $data = $req->validated();

        // return view('admin.category.test_update', ['data'=>$data]);
        $category = Category::find($data['id']);

        $category->name = $data['name'];
        $category->slug = Str::slug($data['slug']);
        $category->description = $data['description'];
        if($req->hasFile('image')) {

            $destination = 'uploads/category/'.$category->image;
            if(File::exists($destination)) {
                File::delete($destination);
            }

            $file = $req->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $category->image = $filename;
        }
        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keyword = $data['meta_keyword'];
        $category->navbar_status = $req->navbar_status == true ? '1':'0';
        $category->status = $req->status == true ? '1':'0';
        $category->created_by = Auth::user()->id;
        $category->update();

        return redirect('admin/category')->with('status',
        'Category Updated Successfully');

    }


    public function delete($category_id)
    {
        $category = Category::find($category_id);

        if($category) {
            $category->posts()->delete(); 
            $category->delete(); 
            return redirect('admin/category')->with('status', 'Category has been deleted..');
        }
        else {
            return redirect('admin/category/')->with('status', 'No Category Found..');
        }

    }


}
