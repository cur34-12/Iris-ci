<?php
	
	define (DB_USER, "logi_dbuser");
	define (DB_PASSWORD, "dblogi0911>");
	define (DB_DATABASE, "logi");
	define (DB_HOST, "int.db1.strat.is");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	$sql = "SELECT eq_id, eq_name, eq_asset_number, eq_serial FROM equipment 
			WHERE 
				eq_name LIKE '%".$_GET['query']."%' 
				OR eq_asset LIKE '%".$_GET['query']."%' 
				OR eq_serial LIKE '%".$_GET['query']."%'
			LIMIT 10"; 
	$result = $mysqli->query($sql);
	
	$json = $result->fetch_all(MYSQLI_ASSOC);

	echo json_encode($json);