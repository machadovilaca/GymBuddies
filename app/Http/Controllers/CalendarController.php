<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $week = Input::get('week');
        $year = Input::get('year');

        if ($year == "" || $week == "" ) {
            $year = (isset($_GET['year'])) ? $_GET['year'] : date("Y");
            $week = (explode ( "0" , (isset($_GET['week'])) ? $_GET['week'] : date('W')))[1]; 

            return redirect('/calendar?week='.$week.'&year='.$year);
        }
        else {

            date("Y-m-d", strtotime('monday this week'));
            date("Y-m-d", strtotime('sunday this week'));

            $workouts =  \App\CalendarEntry::where('date','>', '2012-11-18')->where('date','<', '2012-11-18')->get();

            return view('calendar.index')
                ->with('week', $week)
                ->with('year', $year);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($arg)
    {
        return view('calendar.create')
            ->with('arg', $arg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $in = new \App\CalendarEntry;

        $in->date = $request['date'];
        $in->title = $request['workouts'];

        $in->user()->associate(Auth::user()->id);

        $in->save();

        return redirect('/calendar');
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
