<?php
include('Connection.php');
session_start();
 $password  = $_SESSION['pass_ok'] ;
 $email = $_SESSION['email_ok'] ;

if(isset($_POST["submit"])) {
    if(is_array($_FILES)) {


        $file = $_FILES['image']['tmp_name']; 
        $sourceProperties = getimagesize($file);
        $fileNewName = time();
        $folderPath = "Upload/";
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageType = $sourceProperties[2];


        switch ($imageType) {

//UPDATE `users` SET `min_img` = 'Uploads/scsac.png', `max_img` = 'Uploads/scsac.png' WHERE `users`.`id_user` = 1;

            case IMAGETYPE_PNG:
                $imageResourceId = imagecreatefrompng($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagepng($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);

                $min_img_1 =$folderPath. $fileNewName. "_thump.". $ext;
                    echo "min_img  --> ".$min_img_1."<br>";
                 
                // $sql_1 = "UPDATE `users` SET  `min_img` = '".$min_img_1."' WHERE `users`.`user_password` = ".$password."AND `users`.`email` = ".$email."";


                $statement_e = $Connect->prepare("UPDATE users SET  min_img = '".$min_img_1."' WHERE user_password = '".$password."'AND email = '".$email."'");
                $statement_e->execute();

                

                echo "min_img  -->   ". $folderPath. $fileNewName. "_thump.". $ext."<br>";
                break;


            case IMAGETYPE_GIF:
                $imageResourceId = imagecreatefromgif($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagegif($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                $min_img_2 =$folderPath. $fileNewName. "_thump.". $ext;
                echo "min_img  --> ".$min_img_2."<br>";



                 $statement_e = $Connect->prepare("UPDATE users SET  min_img = '".$min_img_2."' WHERE user_password = '".$password."'AND email = '".$email."'");
                $statement_e->execute();


                echo "min_img  -->   ". $folderPath. $fileNewName. "_thump.". $ext."<br>";
                break;


            case IMAGETYPE_JPEG:
                $imageResourceId = imagecreatefromjpeg($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                 $min_img_3 =$folderPath. $fileNewName. "_thump.". $ext;
                  echo "min_img  --> ".$min_img_3."<br>";


                  $statement_e = $Connect->prepare("UPDATE users SET  min_img = '".$min_img_3."' WHERE user_password = '".$password."'AND email = '".$email."'");
                $statement_e->execute();


                 echo "min_img  -->   ". $folderPath. $fileNewName. "_thump.". $ext."<br>";
                break;


            default:
                echo "Invalid Image type.";
                exit;
                break;
        }





        move_uploaded_file($file, $folderPath. $fileNewName. ".". $ext);


       



// 

       
       

            $max_path =$folderPath. $fileNewName. ".". $ext;
               //  echo  $max_path."<br>";

        $sql = "UPDATE `users` SET  `max_img` = '".$max_path."' WHERE `user_password` = '".$password."'AND `email` = '".$email."'";

       $Connect->exec($sql);


         echo "Image Resize Successfully."."<br>";

         header('Location: Login.php');

         // remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

    }
}


function imageResize($imageResourceId,$width,$height) {


    $targetWidth =200;
    $targetHeight =200;


    $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
    imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);


    return $targetLayer;
}
?>