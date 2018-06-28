<?php

include('Connection.php');
session_start();





// $myfile = fopen("DODOD.txt", "w") or die("Unable to open file!");

// fwrite($myfile,'post_ID :  '. $_POST['name']);
// fwrite($myfile, '   ,   ');
// fwrite($myfile,'user_ID :  '. $_SESSION['id_user']);


// // echo $_POST['name'];
// //  echo $_POST['city'];

//  fclose($myfile);





$post_id = $_POST['name'];
$user_id = $_SESSION['id_user'];

//SELECT * FROM `likes`
//INSERT INTO `likes` (`Like_id`, `Post_id`, `user_id`) VALUES ('', '195', '1');




$sql = "INSERT INTO `likes` (`Like_id`, `Post_id`, `user_id`) VALUES (NULL, '".$post_id."', '".$user_id."')";


 $Connect->exec($sql);





