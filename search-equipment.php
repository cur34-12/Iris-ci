<?php
//THESE DETAILS NEED UPDAED WITH THE PRODUCTION CREDENTIALS ON THE SERVER
define('DB_SERVER', 'int.db1.strat.is');
define('DB_USER', 'iris_staging');
define('DB_PASSWORD', '4Rc8lDEm13xv>');
define('DB_NAME', 'iris_staging');


if (isset($_GET['term'])){
    $return_arr = array();

    try {
        $conn = new PDO("mysql:host=".DB_SERVER.";port=3306;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //$stmt = $conn->prepare('SELECT eq_name FROM equipment WHERE eq_name LIKE :term');
        $stmt = $conn->prepare("SELECT eq_name, eq_id, eq_serial, eq_asset_number, concat(coalesce(eq_name,''),coalesce(eq_id,''),coalesce(eq_serial,''),coalesce(eq_asset_number,'')) as searchValue FROM equipment WHERE concat(coalesce(eq_name,''),coalesce(eq_id,''),coalesce(eq_serial,''),coalesce(eq_asset_number,'')) LIKE :term");

        $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
        /*
        while($row = $stmt->fetch()) {
            $return_arr[] =  $row['eq_name'];
        }*/
        $return_arr = $stmt->fetchall();

    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
    //echo json_encode($stmt->fetch());
}

?>