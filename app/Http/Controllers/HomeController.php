<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $id = $user->id;
        $data = Blogs::orderBy('created_at', 'desc')->where('user_id', $id)->get(); 
        return view('home', compact('data'));
    }
}
