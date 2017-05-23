<?php

function return_success () {
	$response = array(
		'status' => TRUE,
		'message' => 'The data was saved!',
	);
	$response = json_encode($response);
	echo $response;
	exit;
}

function return_error () {
	$response = array(
		'status' => FALSE,
		'message' => 'Something went wrong! Please, try again later!',
	);
	$response = json_encode($response);
	echo $response;
	exit;
}