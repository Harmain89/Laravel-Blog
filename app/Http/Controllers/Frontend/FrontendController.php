<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\postsModel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $post = postsModel::where('status', 0)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);
        $category = Category::where('status',0)->get();

        return view('frontend.index', [
            'post'=>$post,
            'category'=>$category
        ]);
    }
    
    public function ViewCategoryPost(string $category_slug)
    {
        $category = Category::where('slug', $category_slug)->where('status', 0)->first();
        
        if($category) {
            $post = postsModel::where('category_id', $category->id)
                    ->where('status', 0)
                    ->paginate(2);
            return view('frontend.post.index', compact('post', 'category'));
        }
        else {
            return redirect('/');
        }

    }

    public function ViewPost(string $categorty_slug, string $post_slug ) {
        $category = Category::where('slug',$categorty_slug)->where('status',0)->first();

        if($category) {
            $post = postsModel::where('category_id',$category->id)
            ->where('slug',$post_slug)
            ->where('status',0)
            ->first();
            
            $Latest_post = postsModel::where('category_id',$category->id)
            ->where('status', 0)
            ->orderBy('created_at','DESC')
            ->get()
            ->take(15);
            
            return view('frontend.post.view', compact('category','post','Latest_post'));
        }
        else {
            return redirect('/');
        }
    }

}
