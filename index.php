<?php

$part = '';
$story = '';
if(isset($_GET['part']))
	$part = $_GET['part'];
if(isset($_GET['story']))
	$story = $_GET['story'];

$part1 = array('' => 'content/part1/story1_school.php', 'school' => 'content/part1/story1_school.php', 'service' => 'content/part1/story2_service.php', 'house' => 'content/part1/story3_house.php', 'error' => 'content/error.php');
$part2 = array('' => 'content/part2/story1_hospital.php', 'hospital' => 'content/part2/story1_hospital.php', 'orphanage' => 'content/part2/story2_orphanage.php', 'audio' => 'content/part2/story3_audio.php', 'error' => 'content/error.php');
$part3 = array('' => 'content/part3/story1_hue.php', 'hue' => 'content/part3/story1_hue.php', 'morgan' => 'content/part3/story2_morgan.php', 'sean' => 'content/part3/story3_sean.php', 'error' => 'content/error.php');

// If no part is specified, make it intro
if(!($part == 'one' || $part == 'two' || $part == 'three' || $part == 'timeline' || $part == 'intro'))
	$part = 'intro';

// Make sure the story actually exists
switch ($part) {
	case 'one':
		if (!array_key_exists($story, $part1))
			$story = 'error';
		if($story == '')
			$story == 'school';
		break;
	case 'two':
		if (!array_key_exists($story, $part2))
			$story = 'error';
		if($story == '')
			$story == 'hospital';
		break;
	case 'three':
		if (!array_key_exists($story, $part3))
			$story = 'error';
		if($story == '')
			$story == 'hue';
		break;
}


//echo $page;

include("include/head.php");


switch ($part) {
	case 'one':
	//echo $page;
		include($part1[$story]);
		include("content/part1/part1bottom.php");
		break;
	case 'two':
		include($part2[$story]);
		include("content/part2/part2bottom.php");
		break;
	case 'three':
		include($part3[$story]);
		include("content/part3/part3bottom.php");
		break;
	case 'timeline':
		include("content/timeline/timeline.php");
		break;
	case 'intro':
		include("content/intro/intro.php");
		include("content/intro/introbottom.php");
}

include("include/foot.php"); 

?>