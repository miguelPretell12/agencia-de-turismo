<?php 
$servidor = "mysql:dbname=turismo;host=localhost";

try{
    $pdo = new PDO($servidor,'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
    
}catch(PDOException $e){
    echo "<script>alert('Error...')</script>" ;
}
