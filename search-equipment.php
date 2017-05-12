<?php
	
	define (DB_USER, "logi_dbuser");
	define (DB_PASSWORD, "dblogi0911>");
	define (DB_DATABASE, "logi");
	define (DB_HOST, "int.db1.strat.is");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	$sql = "SELECT equipment.eq_name FROM equipment 
			WHERE eq_name LIKE '%".$_GET['query']."%'
			LIMIT 10"; 
	$result = $mysqli->query($sql);
	
	$json = [];
	while($row = $result->fetch_assoc()){
	     $json[] = $row['eq_name'];
	}

	echo json_encode($json);