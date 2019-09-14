<?php
$biodata = array(
	'name'	=> ('Muhammad Miftahuddin Ghfour'),
	'age'	=> 26,
	'addres'	=> 'Jetis Tirtomulyo Kretek Bantul DIY',
	'Hobies'	=> 'Football',
	'is_merried'	=> false,
	'list_school' 	=> array('name' => 'Universitas Gadjah Mada', 'year_in' => 2011, 'year_out'=> 2018, 'major'=>'Computer Science'),
	'skills'		=> array('python' => 'advanced', 'HTML, CSS, Javascript, PHP, AWS' => 'Beginner' ),
	'interest_in_coding' => true,
);
$json = json_encode($biodata);
echo $json;
?>