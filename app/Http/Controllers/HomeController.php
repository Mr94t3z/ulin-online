<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\User;

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
        $data = Posts::orderBy('created_at', 'desc')->paginate(8);
        return view('home', compact('data'));
    }
    /*public function user()
    {
        return redirect('home')->route('users', ['tipe' => 0]);
    }
    */
}
