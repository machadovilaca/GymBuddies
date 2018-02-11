<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEntry extends Model
{

    protected $table = 'calendarEntry';

    protected $fillable = [
        'user_id', 'date', 'title','description',
    ];
    /*protected $hidden = [
        ,
    ];*/
    public $timestamps = false;

}