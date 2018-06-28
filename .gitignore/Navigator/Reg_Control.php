<?php

include('Connection.php');
session_start();


$username = strip_tags($_POST['user_name']);
$first_name = strip_tags($_POST['first_name']);
$last_name =strip_tags($_POST['last_name']);
$password = strip_tags($_POST['password']);
$email = strip_tags($_POST['email']);
$Mobile =strip_tags($_POST['Mobile']);
$birth =$_POST['year'].'-'.$_POST['month'].'-'. $_POST['day'];
$national =strip_tags($_POST['national']);
$releg = strip_tags($_POST['releg']);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {



   if (strlen($username)=== 0 || strlen($first_name)=== 0 || strlen($last_name)=== 0 || strlen($password)=== 0 || strlen($email)=== 0 || strlen($national)=== 0 || strlen($releg)===0) {

	 	header('Location: Register.php');
   			$_SESSION['nodata'] = "nodata";
		 		
			echo "All Data should enterd";





   }
   else{

   	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	
			header('Location: Register.php');
			$_SESSION['mailx'] = "mailxkh";
			echo "wrong mail";
			
}

$pass = strip_tags($_POST['password']);
if(strlen($pass)=== 0) {
	
			echo "a7a ya 3am feen al passeword ";

				header('Location: Register.php');
				$_SESSION['pass'] = "emptyval";
}
//------------------------------------

	   		 $email =  $_POST['email'];
	   		 $user_name =  $_POST['user_name'];




   		 $statement_e = $Connect->prepare("SELECT * FROM `users` WHERE `email` = '".$email."'");
		 $statement_e->execute();
		 $count_e = $statement_e->rowCount();
		 $R_e = $statement_e->fetchAll( PDO::FETCH_ASSOC );


		 $statement_u = $Connect->prepare("SELECT * FROM `users` WHERE `username` = '".$user_name."'");
		 $statement_u->execute();
		 $count_u = $statement_u->rowCount();
		 $R_u = $statement_u->fetchAll( PDO::FETCH_ASSOC );


		 if($R_e|| $count_e > 0 ) {
		 		header('Location: Register.php');
		 	echo "email is aready taken !!!";
		 	$_SESSION['takenmail'] = "takenmail";
		 	
		 
		 }elseif ($R_u|| $count_u > 0 ) {
		 		header('Location: Register.php');
		 		$_SESSION['takenuser'] = "takenuser";
		 		echo "usernaem is aready taken !!!";
		 	//header('Location: Register.php');
		 }else
		 {




// echo 'fafafaf      '.date("Y-m-d h:i:s") . "<br>";

$created_date = date("Y-m-d h:i:s");
$update_date = date("Y-m-d h:i:s");



$sql = "INSERT INTO `users` (`id_user`, `username`, `firstname`, `lastname`, `user_password`, `email`, `mobile`, `is_Active`, `is_Blocked`, `created_date`, `update_date`, `birth`, `nationality`, `relition`, `min_img`, `max_img`) VALUES (NULL, '".$username."', '".$first_name."', '".$last_name."', '".$password."', '".$email."', '".$Mobile."', '0', '0', '".$created_date."', '".$created_date."', '".$birth."', '".$national."', '".$releg."', '', '')";


 $Connect->exec($sql);

header('Location: face.php');
$_SESSION['email_ok'] =$email;
$_SESSION['pass_ok'] = $password;


 echo "Doneeee!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";




   		
		}	


			
}




				
			}


else
     {		header('Location: Register.php');
    	$_SESSION['wrongx'] = "wrongx";
		 		
			
			
    	echo "Error Wrong data";
    }










/*
INSERT INTO `users` (`id_user`, `username`, `firstname`, `lastname`, `user_password`, `email`, `mobile`, `is_Active`, `is_Blocked`, `created_date`, `update_date`, `birth`, `nationality`, `relition`, `min_img`, `max_img`) VALUES (NULL, 'Hassan1235', 'ahmed', 'hassan', 'MK5268', 'ahmedhassan@gmeil.com', '0100256985', '0', '0', '2018-06-05 08:23:24', '2018-06-14 05:17:18', '2018-06-13', 'Egyptian', 'Islam', 'Uploads/acsc.png', 'Uploads/acsc.png');


*/


//--------------------Excecute Query----------------

//$sql = "INSERT INTO items (name) VALUES ('احمد')";

// $Connect->exec($sql);
//------------------------------------


// echo $_POST['user_name'];
// echo "<br>";
// echo $_POST['first_name'];

// echo "<br>";
// echo $_POST['last_name'];
// echo "<br>";
// echo $_POST['password'];
// echo "<br>";
// echo $_POST['email'];
// echo "<br>";
// echo $_POST['Mobile'];
// echo "<br>";
// echo $_POST['year'].'-'.$_POST['month'].'-'. $_POST['day'];
// echo "<br>";
// echo "<br>";
// echo $_POST['national'];
// echo "<br>";
// echo $_POST['releg'];
