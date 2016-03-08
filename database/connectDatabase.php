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

function getDataArray($sql){
    $dbConn = getConnection();

    $tsql = $sql;
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
