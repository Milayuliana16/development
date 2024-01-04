<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\guestbook;

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
        $guestbook = guestbook::all();
        $data['title']= 'Dashboard';
        $data['guest'] = $guestbook;
        return view('home',$data);
    }

    
}
