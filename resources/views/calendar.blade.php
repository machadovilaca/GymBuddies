<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GYM BUDDIES</title>
        <style>
            .nextprev     {lpadding: 70px 25px;
                           width: 100%;
                           background: #045FB4;
                           font-family: Verdana, sans-serif;
                           text-decoration:none;
            }
            a             {color: white;
                           font-size: 20px;
                           text-decoration:none; 
                           font-family: Marker Felt, fantasy;
            }
            table         {border-collapse: collapse;
                           width: 100%;
            }
            table, td, th {border: 1px solid black;
                           font-family: Verdana, sans-serif;
                           height: 50%
            }
        </style>

    </head>
<body>
    
<?php
$year = (isset($_GET['year'])) ? $_GET['year'] : date("Y");
$week = (isset($_GET['week'])) ? $_GET['week'] : date('W');
if($week > 52) {
    $year++;
    $week = 1;
} elseif($week < 1) {
    $year--;
    $week = 52;
}
?>

<div class="nextprev">
<a href="<?php echo 'calendar'.'?week='.($week == 1 ? 52 : $week -1).'&year='.($week == 1 ? $year - 1 : $year); ?>">Pre Week</a> <!--Previous week-->
<a href="<?php echo 'calendar'.'?week='.($week == 52 ? 1 : 1 + $week).'&year='.($week == 52 ? 1 + $year : $year); ?>">Next  Week</a> <!--Next week-->
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
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td> </td>
       
    </tr>
</ul>
    </tr>
</table>

</body>
</html>
