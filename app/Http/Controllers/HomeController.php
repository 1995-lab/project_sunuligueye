<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use App\Models\Role;
use Illuminate\Http\Request;

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
        if(auth()->user()->isRole == 1){
            return view('homeFreelance');
        }
        else{
            return view('home');
        }
    }
}
