<?php

include 'functions.php';
include 'config.php';

$connect = db_connect();

$request_vars = &$_REQUEST;
$json = $request_vars['json'];
$data = json_decode($json, TRUE);

if (empty($data)) {
	return_error();
}

$query = 'INSERT INTO test (!columns) VALUES (!values)';

$columns = array();
$values = array();
foreach ($data as $key => $value) {
	$columns[] = $key;
	$values[] = '"' . mysqli_real_escape_string($connect, $value) . '"';
}

$columns = implode(', ', $columns);
$values = implode(', ', $values);
$query = str_replace('!columns', $columns, $query);
$query = str_replace('!values', $values, $query);
$result = mysqli_query($connect, $query);

if (!$result) {
	return_error();
}

return_success();