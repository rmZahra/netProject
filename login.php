<?php
	session_start(); 
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		include 'config.php';
	
	if(($_POST['username']==$adminuser) && ($_POST['password']==$adminpass))
	{
		$_SESSION['user']=$_POST['username'];
		header("location:home.php");
	}
	
	}
?>
<html>
<head>
<meta charset="utf-8">
<link  rel="stylesheet" type="text/css" href="style.css">
<body>

<div class="m">

<div class="help">
<br><p> !!دسترسی به مستند مربوط به پروژه با استفاده از نام کاربری و رمز عبوری که از قبل برای مدرس کلاس تعریف شده است انجام می شود </p>
</body>
</head>

<div class="help2">

	<body bgcolor="#B5A5D5">
		<form action="document.php" method=POST >
		
		<div class="field">
		<b>username	<input type="text" name="username">
		</div>
		
		<b>password	<input type="password" name="password">
		<div class="field">
		<br>	<input type="submit" value="enter">
			</div>
</div>
</div><!--end m-->
<
		</form>
	</body>
</html>