<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>..::Boominathan HMVC Codeigniter3 For Beginners::..</title>
<link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css"/>
<script src="<?php echo base_url();?>assets/login/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/login/js/jquery.ui.shake.js"></script>
	<script>
			$(document).ready(function() {
			
			$('#login').click(function()
			{
			var username=$("#username").val();
			var password=$("#password").val();
		    var dataString = 'username='+username+'&password='+password;
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
			
 
			$.ajax({
            type: "POST",
            url: "home",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
            if(data)
            {
            $("body").load("<?php echo base_url();?>home/welcome").hide().fadeIn(1500).delay(6000);
            }
            else
            {
             $('#box').shake();
			 $("#login").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });
			
			}

			return false;
			});
			
				
			});
		</script>
</head>

<script> 
	$(document).ready(function(){
   		
   		$('#ci').animate({left: '10px'}, "slow");
        $('#ci').animate({fontSize: '2em'}, "slow");
 
});
</script> 
</head>
<body>

<div style="height:10px;width:1000px;position:absolute;" id="ci">
		<font color="#FF2C00"><h3>Welcome to HMVC IN Codeigniter3</h3></font>
</div>

<body>
<div id="main">
	<img src="<?php echo base_url();?>assets/img/codeigniter.png">
		<div id="box">
			<form action="" method="post">
				<label>Username</label> 
				<input type="text" name="username" class="input" autocomplete="off" id="username"required/>
				<label>Password </label>
				<input type="password" name="password" class="input" autocomplete="off" id="password" required/><br/>
				<input type="submit" class="button button-primary" value="Log In" id="login"/> 
				<span class='msg'></span> 
					<div id="error">	
					</div>	
			</form>	
		</div>
	</div>
</div>
</body>
</html>