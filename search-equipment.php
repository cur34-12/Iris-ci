<?php
$servername = "int.db1.strat.is";
$username = "logi_dbuser";
$password = "dblogi0911>";
$dbname = "logi";
$sql = "SELECT eq_name FROM equipment WHERE eq_name LIKE '%".$_GET['query']."%' LIMIT 10";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$json = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$json[] = $rows["eq_name"];
}
echo json_encode($json);
?>
