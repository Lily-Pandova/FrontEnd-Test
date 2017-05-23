<?php

function db_connect(){
		$connect = mysqli_connect("localhost", "root", "", "frontend_test");
    $connect->set_charset('utf8');

    return $connect;
}