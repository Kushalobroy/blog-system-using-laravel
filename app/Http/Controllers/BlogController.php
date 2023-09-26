<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function addblog(Request $request){
           $request->validate([
                'title'=>'required',
                'content'=>'required'
           ]);
           $user = Auth::user();
           $blogs = new Blogs;
           $blogs->user_id = $user->id;
           $blogs->title = $request->title;
           $blogs->content = $request->content;
           $blogs->save();
           Session::flash('Blog_add','Blog Added Successfully');
           return back();    
    }
    public function delete($id){
        $data = Blogs::find($id);
        $data->destroy();
        return back('Delete_blog','Blog Deleted Successfully');
    }
}
