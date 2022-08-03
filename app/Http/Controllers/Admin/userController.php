<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller 
{
    public function index()
    {
        $user = User::all();
        return view('admin.users.users_index', ['data'=>$user]);
    }
    
    public function create()
    {
        $user = User::all();
        return view('admin.users.create_user', ['data'=>$user]);
    }

    public function save()
    {
        # code...
    }
    
    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('admin.users.edit-user', ['data'=>$user]);
    }

    public function update(Request $req, $user_id)
    {
        $user = User::find($user_id);
        if($user) {
            $user->role_as = $req->role_as;
            $user->update();
            return redirect('admin/edit-user/'.$user_id)->with('status', 'User Role Has Been Changed.');
        }
        else {
            return redirect('admin/edit-user/'.$user_id)->with('status', 'No User Found.');
        }
    }


}
