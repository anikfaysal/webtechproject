<?php

	$host="127.0.0.1";
	$user="root";
	$pass="";
	$db="ecommerce";
    $port=3306;
	
	//$conn=mysqli_connect($host,$user,$pass,$db);
    function executeSQL($sql){
        global $host, $user, $pass, $dbname, $port;
        
        $link=mysqli_connect($host, $user, $pass, $dbname, $port);
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
        
        return $result;
    }

 
?>