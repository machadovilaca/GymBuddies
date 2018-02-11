<?php

namespace App\Http\Controllers;

use App\CalendarEntry;
use Auth;
use Response;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;


class CalendarController extends Controller
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
        return view('calendar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calendar');
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

    
        $data = $request->all();

        $in->date = (new Carbon($data['start']))->format('Y-m-d');
        //$requestio["start"];//"2018-02-12"; //(new Carbon($requestio["start"]))->format('Y-m-d');
        $in->title = $data['title'];

        $in->user()->associate(Auth::user()->id);

        $in->save();

        //return redirect('/calendar');
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
