<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Category;
use App\Models\postsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index() {
        $posts = postsModel::all();
        return view('admin.post.post_index', ['data'=>$posts]);
    }

    public function create() {
        $category = Category::where('status','0')->get();
        return view('admin.post.create', ['data'=>$category]);
    }

    public function save(PostFormRequest $request) {
        $data = $request->validated();  //Check Validation.

        $post = new postsModel;     //Calling postModel by making its object.

        $post->category_id = $data['category_id'];
        $post->name = $data['name'];
        $post->slug = Str::slug($data['slug']);
        $post->description = $data['description'];
        $post->yt_iframe = $data['yt_iframe'];
        $post->meta_title = $data['meta_title'];
        $post->meta_description = $data['meta_description'];
        $post->meta_keyword = $data['meta_keyword'];
        $post->status = $request->status == true ? '1':'0';
        $post->created_by = Auth::user()->id;

        $post->save();

        return redirect('admin/posts')->with('status', "Post Added Successfully");

    }

    public function edit($post_id)
    {
        $category = Category::where('status','0')->get();
        $data = postsModel::find($post_id);
        return view('admin.post.edit', compact('data','category'));
    }

    public function update(PostFormRequest $request, $post_id)
    {
        $data = $request->validated();
        
        $post = postsModel::find($post_id);

        $post->category_id = $data['category_id'];
        $post->name = $data['name'];
        $post->slug = Str::slug($data['slug']);
        $post->description = $data['description'];
        $post->yt_iframe = $data['yt_iframe'];
        $post->meta_title = $data['meta_title'];
        $post->meta_description = $data['meta_description'];
        $post->meta_keyword = $data['meta_keyword'];
        $post->status = $request->status == true ? '1':'0'; 
        $post->created_by = Auth::user()->id;

        $post->update();

        return redirect('admin/posts')->with('status', $data['name'].' Has Been Updated Successfuly');
        
    }
    
    public function delete($post_id)
    {
        $post = postsModel::find($post_id);
        
        $post_name = $post['name'];

        $post->delete();
        
        return redirect('admin/posts')->with('status', $post_name.' Has Been Deleted Successfuly');

    }


}
