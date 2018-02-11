<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

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
        $user_id = Auth::user()->id;

        $old = Carbon::now()->subDays(8);
        $mean_prot =  \App\Food::where('user_id','=', $user_id)->where('created_at','>',$old)->avg('protein');
            $mean_fat =  \App\Food::where('user_id','=', $user_id)->where('created_at','>',$old)->avg('fat');
            $mean_carbo =  \App\Food::where('user_id','=', $user_id)->where('created_at','>',$old)->avg('carbohydrates');
            return view('home')
                    ->with('mean_prot', $mean_prot)
                    ->with('mean_fat', $mean_fat)
                    ->with('mean_carbo', $mean_carbo);
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
