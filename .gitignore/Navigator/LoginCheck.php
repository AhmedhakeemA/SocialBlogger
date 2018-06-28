<?php

include('Connection.php');

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   if (isset($_POST['email']) && isset($_POST['password'])) {

    	// echo $_GET['email'];
   		//  echo $_GET['password'];



	   		 $email =  $_POST['email'];
	   		 $password =  $_POST['password'];


   		 $statement = $Connect->prepare("SELECT `user_password`, `email` FROM `users` WHERE `user_password` = '".$password ."' AND `email` = '".$email."'");
			$statement->execute();

			$count = $statement->rowCount();

			 $R = $statement->fetchAll( PDO::FETCH_ASSOC );


			if($R|| $count > 0 ) {

					echo "</br>";
					echo "Sucess";

					 $statement_inside = $Connect->prepare("SELECT * FROM `users` WHERE `user_password` = '".$password ."' AND `email` = '".$email."'");
			$statement_inside->execute();

			$count_inside = $statement_inside->rowCount();

			 $R_inside = $statement_inside->fetch( PDO::FETCH_ASSOC );


			$_SESSION['username'] =  $R_inside ['username'];
			 $_SESSION['id_user'] = $R_inside ['id_user'];
			 $_SESSION['is_Active'] =  $R_inside ['is_Active'];
			 $_SESSION['firstname'] =  $R_inside ['firstname'];
			 $_SESSION['lastname'] =  $R_inside ['lastname'];
			  $_SESSION['min_img'] =  $R_inside ['min_img'];

			 
			 $_SESSION['user_password'] =  $R_inside ['user_password'];
			 $_SESSION['email'] =  $R_inside ['email'];
			 $_SESSION['created_date'] =  $R_inside ['created_date'];


			 

			 	 // foreach ($R_inside as $row_inside) {



			 	 // }
     
      

					header('Location: main.php');

			}
			else{
				header('Location: Login.php');
				echo "Not valid Data";
				
				$_SESSION['Val'] = "false";
				
			}

    




    } 
    else
    {

    	echo "Error Wrong data";
    }
    






}
else{

	echo "Error Wrong Request";
}