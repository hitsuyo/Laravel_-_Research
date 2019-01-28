<?php
$dbhost='localhost';
$dbroot='root';
$dbpass='';
$dbname='1demosmarty';

// $conn=mysql_connect($dbhost,$dbroot,$dbpass);
// mysql_select_db($dbname, $conn);

//////// Do not Edit below /////////
try {
    $dbo = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbroot, $dbpass);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    
?>