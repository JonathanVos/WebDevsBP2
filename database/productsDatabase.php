<?php
/**
 * Created by PhpStorm.
 * User: Bjorn
 * Date: 3/8/2016
 * Time: 15:18
 * used for getting product from the database and inserting products into the database
 */

require_once ('connectDatabase.php');

$tsql = "SELECT * from Products";
$result = sqlsrv_query( $dbConn, $tsql, null);
if ( $result === false)
{
    die( print_r( sqlsrv_errors() ) );
}
while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
{
    echo $row['product_id'].", ".$row['product_name']."<br />";
}
sqlsrv_free_stmt($result);
sqlsrv_close($dbConn);