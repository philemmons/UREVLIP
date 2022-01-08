<?php
    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);
    
    $servername = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $dbname = ltrim($dbparts['path'],'/');

    //$servername='localhost';
    //$username='root';
    //$password='';
    //$dbname = "my_db";
    
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>