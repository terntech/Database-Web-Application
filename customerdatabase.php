<?php
include('root/config.php');
$connectionInfo = array( "Database"=>"$database", "UID"=>"$username", "PWD"=>"$password");
$conn = sqlsrv_connect( $servername, $connectionInfo);
$port = '1433';

/*if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}*/
    try {
        $db = new PDO("sqlsrv:Server=$servername;Database=$database", "$username", "$password");
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('error.php');
        exit();
    }
?>