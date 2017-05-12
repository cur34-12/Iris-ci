<?php
	
	define (DB_USER, "logi_dbuser");
	define (DB_PASSWORD, "dblogi0911>");
	define (DB_DATABASE, "logi");
	define (DB_HOST, "int.db1.strat.is");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	$sql = "SELECT equipment.eq_id, equipment.eq_name, equipment.eq_asset_number, eqipment.eq_serial FROM equipment 
			WHERE (eq_name LIKE '%".$_GET['query']."%' OR eq_asset LIKE '%".$_GET['query']."%' OR eq_serial LIKE '%".$_GET['query']."%')
			LIMIT 10"; 
	$result = $mysqli->query($sql);
	
	$json = [];
	while($row = $result->fetch_assoc()){
	     $json['id'] = $row['eq_id'];
	     $json['name'] = $row['eq_name'];
	     $json['asset'] = $row['eq_asset_number'];
	     $json['serial'] = $row['eq_serial'];	     
	}

	echo json_encode($json);