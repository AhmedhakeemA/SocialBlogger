<?php
//PDO_Connection.php

//this data need for connection 

$dsn ='mysql:host=localhost;dbname=blogger'; //------->data source name need for connection
 
$user = 'root';  //-------> username need for connection
$pass = '';  	//------->	password need for connrction if exsists

//------->  this option is addational features that is enable utf8 in my db 

$options = array( 
	PDO::MYSQL_ATTR_INIT_COMMAND =>  'SET NAMES UTF8',

	);



try
{

$Connect = new PDO($dsn,$user,$pass,$options);   //------>start new connection

$Connect ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //--->change mode of error to exceptions not warning


//--------------------Excecute Query----------------

// $sql = "INSERT INTO items (name) VALUES ('احمد')";

// $Connect->exec($sql);
//------------------------------------

// echo "Sucessfully connected !!";

}
catch(PDOException $e)
{

echo "Fail to establish Connection ".$e->getMessage();

}
