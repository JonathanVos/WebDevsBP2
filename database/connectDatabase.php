<?php
/**
 * Created by PhpStorm.
 * User: Bjorn
 * Date: 3/8/2016
 * Time: 15:15
 *
 * this file will create a variable to connect to the Sql Server database
 */

function getConnection(){
    $serverName = "(local)\sqlexpress";
    $connectionInfo = array( "Database"=>"WebShop", "UID"=>"sa", "PWD"=>"");
    $dbConn = sqlsrv_connect( $serverName, $connectionInfo);
    if($dbConn)
    {

    } else
    {
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));
    }

    return $dbConn;
}
