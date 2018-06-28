<?php

include('Connection.php');



//25:14:15
$statement = $Connect->prepare("INSERT INTO `posts` (`id_post`, `title_post`, `content_post`, `user_key_f`, `create_time`, `create_Date`) VALUES (NULL, '".$_POST['username']."', '".$_POST['area']."', '".$_POST['userId']."', '".$_POST['time']."', '".$_POST['date']."')");
$statement->execute();




//   echo $_POST['area'] ."<br />";
//   echo $_POST['userId'] ."<br />";
//   echo $_POST['username'] ."<br />";
//   echo $_POST['date'] ."<br />";
//   echo $_POST['time'] ."<br />";
//   echo "==============================<br />";
//   echo "All Data Submitted Successfully!";

//  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

// fwrite($myfile,$_POST['area']."<br />");
// fwrite($myfile,$_POST['userId']."<br />");
// fwrite($myfile,$_POST['username']."<br />");
// fwrite($myfile,$_POST['date']."<br />");
// fwrite($myfile,$_POST['time']."<br />");


// fclose($myfile);
