<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php
    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh:30; URL=$url1");
?>

<!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>


	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="Styles/Center_Div.css" rel="stylesheet" >
	<link rel="stylesheet" href="Styles/Tweeta.css">
  <link rel="stylesheet" href="Styles/tweetbox.css">
	<link rel="stylesheet" href="Styles/backup.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="JavaScript/Hovermenue.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="JavaScript/submit.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">


    function foo(valuex,typex){
    
//$("#"+typex).prop("disabled",true);
 location.reload();
$.post("likesHandler.php",
    {
        name: valuex,
        

        
    },
    function(data, status){
        alert("Data: " + valuex + "\nStatus: " + status);
    });


   // alert(valuex);



}
   
    

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;


}
  </script>

<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
	
#title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

.center {
    margin: auto;
    width: 600px;
    height: auto;
    width: 60%;
    
    padding: 10px;
}


#myBtn {
 
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}




</style>
</head>
<body>



<!--------------------------Navigation bar---------------------------------->	
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-slide-dropdown">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="title" href="main.php">Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-slide-dropdown">
        <ul class="nav navbar-nav">
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        	<!-- <li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>				
			  <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>                
            </li> -->
        </ul>
       <!--  <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form> -->
        <?php 
		session_start();

        ?>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
           <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="Profile.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="Login.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-------------------------get max postid-------------------------------------->

<?php  
// include('Connection.php');
//        $statement_id_count = $Connect->prepare("SELECT COUNT(Like_id) AS likes_count FROM `likes` WHERE post_id = 197");
//        $statement_id_count->execute();
//        $R = $statement_id_count->fetch( PDO::FETCH_ASSOC );
//        $likes_count =  $R['likes_count'];
//        echo $likes_count;
 ?>



<!--------------------------Blog Box---------------------------------->
<div class="center">

 


	<div class="tweetbox" >
				
					<form id="myForm" method="POST">
						<span>
			 		<textarea  id="area" cols="80" class="blog" placeholder="Enter your message" required="required" rows="3"></textarea>
			 		</span>
			 		<span>

			 			<input type="hidden" id="userId" name="userId" value="<?php echo $_SESSION['id_user'] ?>">
                  <input type="hidden" id="username" name="username" value="<?php echo $_SESSION['username'] ?>">
        			    <input type="hidden" id="imgx" name="imgx" value="<?php echo  $_SESSION['min_img'] ?>">
        			     <input type="hidden" id="date" name="date" value="<?php echo date("Y-m-d");?>">
                   <input type="hidden" id="time" name="time" value="<?php echo date("h:i:s")?>">
        			     <!-- <input type="hidden" id="max_post" name="max_post" value="<?php //echo $max_post_id;?>"> -->
        			  <input  class="button" style="float: right; margin-top: 20px;" onclick="SubmitFormData();" type="Button"  id="submitFormData" name="go" value="Blog"/>


        			  </span>
        			   
        			      
			</form>

</div>
</div>

<!------------------------------------------------------------>

<!--the main Container of tweets-->
<div class="center" id="center">
	 <button name="totop" id= "myBtn" onclick="topFunction()"> UP</button>
<!------------------------------All Blogs Div------------------------------>
<!-- <div class="tweet">
				<img class="profile_image" src="https://semantic-ui.com/images/avatar2/small/matthew.png" alt="Image">
					<div class="content">
			 		<p><strong>James</strong> <small>@jokerjames</small> <br>
			 			 <small>16-6-2018@11:50:00</small><br>
                If you dont succeed, dust yourself off and try again.
                
              </p> 
          </div>
				<form  >
<input type="hidden" id="custId" name="valueId" value="999">
<input type="button"  value="Like" name="like" id="like55"  class="button"   onclick="foo(this.form.valueId.value,this.form.like.id)"/>
  <span style="margin-left: 5px;">200</span>
</form>
</div>
 -->

<?php

 static $cou = 0;

include('Connection.php');

//$sql = "SELECT * FROM items ";
//SELECT id_post,title_post,content_post,create_time,create_Date,username FROM `posts` JOIN users ON users.id_user =posts.user_key_f
$statement = $Connect->prepare('SELECT id_post,title_post,content_post,create_time,create_Date,username,min_img FROM `posts` JOIN users ON users.id_user =posts.user_key_f ORDER BY create_Date DESC,create_time DESC');
$statement->execute();

$count = $statement->rowCount();

if( $count > 0 ) {

     $R = $statement->fetchAll( PDO::FETCH_ASSOC );


     foreach ($R as $row) {


       $statement_id_count = $Connect->prepare("SELECT COUNT(Like_id) AS likes_count FROM `likes` WHERE post_id = ".$row['id_post']."");
       $statement_id_count->execute();
       $R = $statement_id_count->fetch( PDO::FETCH_ASSOC );
       $likes_count =  $R['likes_count'];



      echo '<div class="tweet">
        <img class="profile_image" src="'.$row['min_img'].'" alt="Image">
          <div class="content">
          <p><strong>'.$row['username'].'</strong> <small>@'.$row['username'].'</small> <br>
             <small>'.$row['create_Date'].'@'.$row['create_time'].'</small><br>
                '.$row['content_post'].'
                
              </p> 
          </div>
        <form  >
<input type="hidden" id="custId" name="valueId" value="'.$row['id_post'].'">
<input type="button"  value="Like" name="like" id="like55"  class="button"    onclick="foo(this.form.valueId.value,this.form.like.id)"/>
  <span style="margin-left: 5px;">'.$likes_count.'</span>
</form>
</div><br>';




     }

}


      ?>





<!------------------------------All Blogs Div------------------------------>

<!------------------------------------------------------------>
<!--the main Container of tweets THE END-->
</div>
	





</body>
</html>