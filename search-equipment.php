<?php
define('DB_SERVER', 'int.db1.strat.is');
define('DB_USER', 'logi_dbuser');
define('DB_PASSWORD', 'dblogi0911>');
define('DB_NAME', 'logi');


if (isset($_GET['term'])){
    $return_arr = array();

    try {
        $conn = new PDO("mysql:host=".DB_SERVER.";port=3306;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //$stmt = $conn->prepare('SELECT eq_name FROM equipment WHERE eq_name LIKE :term');
        //$stmt = $conn->prepare('SELECT eq_name FROM equipment WHERE eq_name LIKE :term');
        $stmt = $conn->prepare('SELECT eq_name, eq_id, eq_serial, eq_asset_number, concat(coalesce(eq_name,''),coalesce(eq_id,''),coalesce(eq_serial,''),coalesce(eq_asset_number,'')) as value FROM equipment WHERE concat(coalesce(eq_name,''),coalesce(eq_id,''),coalesce(eq_serial,''),coalesce(eq_asset_number,'')) LIKE :term');

        $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
        
        while($row = $stmt->fetch()) {
            $return_arr[] =  $row['eq_name'];
        }

    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}

?>