<?php
/**
 * Created by PhpStorm.
 * User: Bjorn
 * Date: 3/8/2016
 * Time: 15:18
 * used for getting product from the database and inserting products into the database
 */

require_once ('connectDatabase.php');
echo "<pre>";
var_dump(getProducts());

function getProducts(){
    $dbConn = getConnection();

    $tsql = "SELECT * from Products";
    $result = sqlsrv_query( $dbConn, $tsql, null);

    $data = array();

    if ( $result === false)
    {
        die( print_r( sqlsrv_errors() ) );
    }

    $i = 0;
    while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
    {
        $data[$i] = $row ;
        $i++;
    }
    sqlsrv_free_stmt($result);
    sqlsrv_close($dbConn);

    return $data;
}
