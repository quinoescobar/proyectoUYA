$(document).ready(function(){

	$("#add_err").css('display', 'none', 'important');
	 $("#login").click(function(){
		  username=$("#email").val();
		  password=$("#password").val();
		  $.ajax({
		   type: "GET",
		   url: "login.php",
			data: "name="+username+"&pwd="+password,
		   success: function(html){
			if(html=='true')    {
			 //$("#add_err").html("right username or password");
			 window.location="perfil.php";
			}
			else    {
			$("#add_err").css('display', 'inline', 'important');
			 $("#add_err").html("<img src='images/alert.png' />Wrong username or password");
			}
		   },
		   beforeSend:function()
		   {
			$("#add_err").css('display', 'inline', 'important');
			$("#add_err").html("<img src='images/ajax-loader.gif' /> Loading...")
		   }
		  });
		return false;
	});


});
