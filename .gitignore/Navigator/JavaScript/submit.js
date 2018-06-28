function SubmitFormData() {

      // location.reload();
   
    var area = $("#area").val();
    var userId = $("#userId").val();
    var username = $("#username").val();
    var date = $("#date").val();
    var time = $("#time").val();
    var image = $("#imgx").val();
   // var max_post_id  = $("#max_post").val();
    

   
    $.post("submit.php", { area: area, userId: userId, username: username, date: date,time: time },
    function(data) {
     $('#center').prepend('<div class="tweet"><img class="profile_image" src="'+image+'" alt="Image"><div class="content"><p><strong>'+username+'</strong> <small>'+'@'+username+'</small> <br><small>'+date+'@'+time+'</small><br>'+area+'</p> </div><form  ><input type="hidden" id="custId" name="valueId" value=""><input type="button"  value="Like" name="like" id="like55"  class="button"   onclick="foo(this.form.valueId.value,this.form.like.id)"/><span style="margin-left: 5px;"></span></form></div>');
     $('#myForm')[0].reset();
    });


}


