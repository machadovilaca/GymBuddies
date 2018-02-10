<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function edit()
    {
        return view('edit');
    }

    public function patch(Request $request)
    {
        $user = Auth::user();

        $user->age = $request['age'];
        $user->height = $request['height'];
        $user->weight = $request['weight'];

        $user->save();

        Auth::setUser($user);
        
        return view('home');
    }

}
