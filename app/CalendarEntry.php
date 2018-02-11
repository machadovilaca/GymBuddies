<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEntry extends Model
{

    protected $table = 'calendarentries';

    protected $fillable = [
        'user_id', 'date', 'title','description',
    ];
    /*protected $hidden = [
        ,
    ];*/
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}