<?php

//CREDENTIALS FOR DB
define ('DBSERVER', 'int.db1.strat.is');
define ('DBUSER', 'logi_dbuser');
define ('DBPASS','dblogi0911>');
define ('DBNAME','logi');

//LET'S INITIATE CONNECT TO DB
$connection = mysql_connect(DBSERVER, DBUSER, DBPASS) or die("Can't connect to server. Please check credentials and try again");
$result = mysql_select_db(DBNAME) or die("Can't select database. Please check DB name and try again");

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $sql = mysql_query ("SELECT eq_id, eq_name FROM equipment WHERE eq_id LIKE '%{$query}%' OR eq_name LIKE '%{$query}%' OR eq_asset_number LIKE '%{$query}%' OR eq_serial LIKE '%{$query}%'");
	$array = array();
    while ($row = mysql_fetch_array($sql)) {
        $array[] = array (
            'label' => $row['eq_name'].', '.$row['eq_id'],
            'value' => $row['eq_name'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}

?>
