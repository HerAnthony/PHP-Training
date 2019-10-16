<?php
	$names = array('Miles', 'Jason', 'Deb');
	// $names2 = ["Miles2", "Jason2", "Deb2"];

	//console log for php
	echo "<pre>";
	print_r($names);
	echo "</pre>";

	// echo $names [0];

	// echo "<pre>";
	// print_r($names2);
	// echo "</pre>";

	//stops rest of code
	// die();

	// echo $names2 [2];

	foreach ($names as $name){
		echo "<p>Hi " . $name . "</p>";
	}

	//associated multi-dimensional array
	$movies = [
		'findingnemo' => [
			'Title' => 'Finding Nemo',
			'Type' => 'DVD',
			'Price' => 30,
			'Studio' => 'Pixar'
		],
		'diehard' => [
			'Title' => 'Die Hard',
			'Type' => 'BluRay',
			'Price' => 10,
			'Studio' => 'Paramount'
		]
];

	echo "<pre>";
	print_r($movies);
	echo "</pre>";

	//broken
	// echo ($movies = 'findingnemo');
	// echo $movies['diehard']['Type'];

	foreach($movies as $movie){
		echo '<p>' . $movie['Title'] . '</p>';
		echo '<p>' . $movie['Type'] . '</p>';
		echo '<p>' . $movie['Price'] . '</p>';

	}

	foreach($movies as $movie){
		foreach($movie as $key=>$item){
			echo '<p>' . $key . ': ' . $item . '</p>';
		}
	}