<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($user_id = Auth::id())
        {
            $old = Carbon::now()->subDays(8);
            $foods =  \App\Food::where('user_id','=', $user_id)->where('created_at','>',$old)->get();
            $mean_prot =  \App\Food::where('user_id','=', $user_id)->where('created_at','>',$old)->avg('protein');
            $mean_fat =  \App\Food::where('user_id','=', $user_id)->where('created_at','>',$old)->avg('fat');
            $mean_carbo =  \App\Food::where('user_id','=', $user_id)->where('created_at','>',$old)->avg('carbohydrates');
            return view('food.index')
                    ->with('foods', $foods)
                    ->with('mean_prot', $mean_prot)
                    ->with('mean_fat', $mean_fat)
                    ->with('mean_carbo', $mean_carbo);
        }
        else
        {
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food = new \App\Food;

        $food->protein = $request['protein'];
        $food->fat = $request['fat'];
        $food->carbohydrates = $request['carbohydrates'];
        
        $food->user()->associate(Auth::user()->id);

        $food->save();

        return redirect('/food');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
