<?php

namespace App\Http\Controllers;

use App\CalendarEntry;
use Auth;
use Response;
use Illuminate\Http\Request;

class CalendarjsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$calendars = CalendarEntry::where('calendarentries.user_id', '=', Auth::user()->id);
        //return view('calendarjs')->with('calendars', $calendars);
        return view('calendarjs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calendarjs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function grab_calendar(Request $request){
        if ($request->isMethod('get')){    
            return Response::json(array(
                    'success' => true,
                    'data'   => CalendarEntry::where('calendarentries.user_id', '=', Auth::user()->id)->get()
                )); 
            //response()->json(CalendarEntry::where('calendarentries.user_id', '=', Auth::user()->id)); 
        }
    }
}
