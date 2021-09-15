<?php 

$month  = date('m');
$year  = date('Y');
$days=cal_days_in_month(CAL_GREGORIAN,$month,$year);

for ($i=0; $i <= $days ; $i++) { 
    $day  = date('Y-m-'.$i);
    $result = date("l", strtotime($day));
    if($result == "Sunday"){
        echo date("Y-m-d", strtotime($day)). " ".$result."<br>";
    }
}

$timezone = new DateTimeZone('Europe/Sofia');
$beginning = new DateTime('first day of this month', $timezone);
$end = new DateTime('last day of this month', $timezone);

while ($beginning <= $end) {
    if ($beginning->format('D') == 'Sun') {
        echo $beginning->format('jS F, Y') . "<br>";
        $beginning->modify('+7 day');
    } else {
        $beginning->modify('+1 day');
    }
}

?>