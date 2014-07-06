

<?php

date_default_timezone_set("America/New_York");

$time_now=date('g:i A');

if ($time_now > '5:00 AM' && $time_now < '10:59 AM') {
	$image = "morning";
	}
if ($time_now > '11:00 AM' && $time_now < '3:59 AM') {
	$image = "afternoon";
}
if ($time_now > '4:00 PM' && $time_now < '7:59 PM') {
	$image = "evening";
}
if ($time_now > '8:00 PM' && $time_now < '4:59 AM') {
	$image = "night";
	}


?>

