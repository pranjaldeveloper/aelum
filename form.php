
<html>
<head>
	<title>Form Tag</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<form name="f1" method="post" action="insert.php">
	<table border="2" align="center" cellpadding="10" cellspacing="5" width="500">
	<tr>
		<th>Name:</th>
		<td>
			<input type="text" name="name" size="30" maxlength="10" placeholder="Enter Name" required >
		</td>
	</tr>
	<tr>
		<th>Email:</th>
		<td>
			<input type="email" name="email" placeholder="Enter Email-id">	
		</td>
	</tr>
	<tr>
		<th>Date Of Birth:</th>
		<td>
			<input type="date" name="dob" >	
		</td>
	</tr>
	<tr>
		<th>About Yourself:</th>
		<td>
			<textarea rows="4" cols="22" name="about" placeholder="Enter about yourself"></textarea>
		</td>
	</tr>
	<tr>
		<th><img src="captcha.php"></th>
		<td>
			<input type="text" name="vercode" class="form-control" placeholder="Verfication Code" required="required">
		</td>
	</tr>

	<tr>
		<th colspan="2">
			<input type="submit" name="btnSave" id="btnSave" value="Save Record">
			<div class="countdown"></div>
		</th>
		
	</tr>
	</table>
</form>
<script>
	var timer2 = "3:00";
	var interval = setInterval(function() {
		var timer = timer2.split(':');
		//by parsing integer, I avoid all extra string processing
		var minutes = parseInt(timer[0], 10);
		var seconds = parseInt(timer[1], 10);
		--seconds;
		minutes = (seconds < 0) ? --minutes : minutes;
		if (minutes < 0){
			clearInterval(interval);
			$( "#btnSave" ).remove();
			$('.countdown').html("Time expired");
		}else{
			seconds = (seconds < 0) ? 59 : seconds;
			seconds = (seconds < 10) ? '0' + seconds : seconds;
			//minutes = (minutes < 10) ?  minutes : minutes;
			$('.countdown').html(minutes + ':' + seconds);
			timer2 = minutes + ':' + seconds;
		}
	}, 1000);
</script>
</body>
</html>