<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="UploaderStyle.css" rel="stylesheet" >
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<title></title>
	
	<script type="text/javascript">
		
		$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});

		 function reloadPage(){
        location.reload(true);
    }
	</script>
</head>
<body>



<div id="mySidenav" class="sidenav">
  <a href="#" id="about">Upload Profile Image</a>
</div>


 	 
<div class="container">

	 
<span>
	
<div class="col-md-6">
    <div class="form-group">
        
        <br>
        <br>
<form action="pro.php" method="post" enctype="multipart/form-data">
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input  type="file" name="image" id="imgInp">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
        </div>
        <br>
        <br>
        <br>
        <img id='img-upload'/>
    </div>
</div>

  <div class="side">
  	
  		<span>
  			<button type="submit" name="submit" value="Submit" class="btn btn-labeled btn-primary"> 
  			<span class="btn-label">
  				<i class="	glyphicon glyphicon-ok-circle"></i> 
  			</span>OK</button>
</form>
  			<br>
  			<br>
  			<button type="submit" class="btn btn-labeled btn-primary"> 
  			<span class="btn-label">
  				Skip
  				<i class="glyphicon glyphicon-chevron-right"></i> 
  			</span></button>
			<br>
  			<br>

  			<button type="submit" class="btn btn-labeled btn-primary" onclick="reloadPage();"> 
  			<span class="btn-label">
  				Clear
  				<i class="glyphicon glyphicon-leaf"></i> 
  			</span></button>


  		</span>
  </div>

</span>

</div>



</body>
</html>