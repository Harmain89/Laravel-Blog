<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\postsModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $category = Category::count();
        $cat = Category::all();
        $posts = postsModel::count();
        $users = User::where('role_as',0)->count();
        $admins = User::where('role_as',1)->count();

        // Chart Data For Posts Per Category -- START
        $cat_names = [];
        $g_id = [];
        foreach($cat as $val) {
            $cat_names[]=$val->name;
            
            $g_id[]=count(array($val));
        }

        $test1 = Category::select('id')->get();
        $dt = [];
        foreach($test1 as $p) {
            $dt[] = $p;
        }

        $df =[];
        for($i=0;$i<count($dt);$i++) {
            $arr[] = implode(json_decode($dt[$i],true));
            // $df[] = DB::select(DB::raw("SELECT count(name) as cat FROM posts WHERE category_id = ".$arr[$i]));
            $df[] = postsModel::select('name')->where('category_id',$arr[$i])->count();
        }
        // json_encode($df);
        // Chart Data For Posts Per Category -- END

        return view('admin.dashboard', [
            'category' => $category,
            'posts' => $posts,
            'users' => $users,
            'admins' => $admins,
            'cat' => $cat,
            'cat_names' => $cat_names,
            'g_id' => $g_id,
            'dt' => $dt,
            'df' => $df
        ]);
        // compact('category','posts','users','admins')
    }
}