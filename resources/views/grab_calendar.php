<?php
    header('Content-Type: application/json');

    $aResult = array();

    if( !isset($_POST['functionname']) ) { $aResult['error'] = 'No function name!'; }

    if( !isset($_POST['arguments']) ) { $aResult['error'] = 'No function arguments!'; }

    if( !isset($aResult['error']) ) {

        switch($_POST['functionname']) {
            case 'grab_calendar':
               if( !is_array($_POST['arguments']) || (count($_POST['arguments']) > 0) ) {
                   $aResult['error'] = 'Error in arguments!';
               }
               else {
               		$calendars = CalendarEntry::where('calendarentries.user_id', '=', Auth::user()->id);
                    $aResult['result'] = $calendars;
               }
               break;

            default:
               $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
               break;
        }

    }

    echo json_encode($aResult);

?>

[
				<?php foreach($calendars as $calendar){ ?>
				{
					title: {{$calendar->title}},
					start: new Date(Date.Parse({{$calendar->date}})),
					allDay: false
				},
				<?php } ?>
			]