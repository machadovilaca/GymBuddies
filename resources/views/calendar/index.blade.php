@extends('layouts.app')

@section('content')
<?php
$year2 = $year;
$week2 = $week;

if($week > 52) {
    $year = $year2++;
    $week = $year2 = 1;
} elseif($week < 1) {
    $year2 = $year--;
    $week = $week2 = 52;
}
?>

<div class="nextprev">
<a href="
            <?php echo 'calendar'.'?week='.($week == 1 ? 52 : $week -1).'&year='.($week == 1 ? $year - 1 : $year); ?>
            ">Pre Week</a> <!--Previous week-->

<a href="
            <?php echo 'calendar'.'?week='.($week == 52 ? 1 : 1 + $week).'&year='.($week == 52 ? 1 + $year : $year); ?>
            ">Next  Week</a> <!--Next week-->
</div>
<table border="4px" bgcolor="#1abc9c">

    <tr>
        <td>DAY</td>

<?php
if($week < 10) {
    $week = '0'. $week;
}
for($day= 1; $day <= 7; $day++) {
    $d = strtotime($year ."W". $week . $day);

    echo "<td>". date('l', $d) ."<br>". date('d M', $d) ."</td>";
}
?>
</ul>
    </tr>


        <tr>
        <td></td>
<?php
if($week2 < 10) {
    $week2 = '0'. $week2;
}
for($day2= 1; $day2 <= 7; $day2++) {
    $d2 = strtotime($year ."W". $week2 . $day2);
    $nmonth = date('m',strtotime(date('M', $d)));

    echo "<td>". "<a href=/calendar/create/" . $year2 . "-" . $nmonth. "-" . date('d', $d2) .">Insert</td>";
}
?>

</ul>
    </tr>

</table>

@endsection
