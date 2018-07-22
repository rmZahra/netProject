<!DOCTYPE HTML>  
<html>
<head>
	<meta charset="utf-8">
	
<style>
.error {color: #FF0000;}
</style>
</head>
	<body bgcolor="#eeeeee">

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr =$birthdayErr =$taaholErr =$madrakErr =$reshteErr =$uniErr =$mh1Err =$mh2Err =$mh3Err= $s1Err = $s2Err =$s3Err = "";
$name = $email = $gender = $comment = $website = $birthday = $taahol =$madrak =$reshte =$uni =$mh1 =$mh2 =$mh3 =$s1 =$s2 =$s3= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
    if (empty($_POST["birthday"])) {
    $birthday = "Birthday is required";
  } else {
    $birthday= test_input($_POST["birthday"]);
  }

  
  if (empty($_POST["taahol"])) {
    $taahol = "marital status is required";
  } else {
    $taahol= test_input($_POST["taahol"]);
  }
  
  if (empty($_POST["madrak"])) {
    $madrak = "degree is required";
  } else {
    $madrak= test_input($_POST["madrak"]);
  }
    if (empty($_POST["reshte"])) {
    $reshte = "field is required";
  } else {
    $reshte= test_input($_POST["reshte"]);
  }
     if (empty($_POST["uni"])) {
    $uni = "university is required";
  } else {
    $uni= test_input($_POST["uni"]);
  }
  
     if (empty($_POST["mh1"])) {
    $mh1 = "";
  } else {
    $mh1= test_input($_POST["mh1"]);
  }
    if (empty($_POST["mh2"])) {
    $mh2 = "";
  } else {
    $mh2= test_input($_POST["mh2"]);
  }
     if (empty($_POST["mh3"])) {
    $mh3 = "";
  } else {
    $mh3= test_input($_POST["mh3"]);
  }
      if (empty($_POST["s1"])) {
    $s1 = "";
  } else {
    $s1= test_input($_POST["s1"]);
  }
       if (empty($_POST["s2"])) {
    $s2 = "";
  } else {
    $s2= test_input($_POST["s2"]);
  }
        if (empty($_POST["s3"])) {
    $s3 = "";
  } else {
    $s3= test_input($_POST["s3"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>فرم رزومه</h1>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<h2>مشخصات فردی</h2>
 
   نام و نام خانوادگی : <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
   جنسیت:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="زن">زن
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="مرد">مرد
		<br>

  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
   تولد : <input type="date" name="birthday" value="<?php echo $birthday;?>">
  <span class="error">* <?php echo $birthdayErr;?></span>
  <br><br>
  
     وضعیت تاهل :
  <input type="radio" name="taahol" <?php if (isset($taahol) && $taahol=="mojarad") echo "checked";?> value="مجرد">مجرد
  <input type="radio" name="taahol" <?php if (isset($taahol) && $taahol=="moteahel") echo "checked";?> value="متاهل">متاهل
		<br>

  <span class="error">* <?php echo $taaholErr;?></span>
  <br><br>
  
  
 پست الکترونیکی: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  وب سایت: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
 
  
<h2>تحصیلات</h2>

  مدرک :
  <input type="radio" name="madrak" <?php if (isset($madrak) && $madrak=="female") echo "checked";?> value="دیپلم">دیپلم
  <input type="radio" name="madrak" <?php if (isset($madrak) && $madrak=="male") echo "checked";?> value="کارشناسی">کارشناسی
   <input type="radio" name="madrak" <?php if (isset($madrak) && $madrak=="male") echo "checked";?> value=" کارشناسی ارشد">کارشناسی ارشد
    <input type="radio" name="madrak" <?php if (isset($madrak) && $madrak=="male") echo "checked";?> value="دکتری">دکتری
		<br>

  <span class="error">* <?php echo $madrakErr;?></span>
  <br><br>
  
  رشته : <input type="text" name="reshte" value="<?php echo $reshte;?>">
  <span class="error">* <?php echo $reshteErr;?></span>
  <br><br>
  
  دانشگاه : <input type="text" name="uni" value="<?php echo $uni;?>">
  <span class="error">* <?php echo $uniErr;?></span>
  <br><br>
  
  <h2>دانش و مهارت</h2>
  
   مهارت : <input type="text" name="mh1" value="<?php echo $mh1;?>">
  <span class="error">* <?php echo $mh1Err;?></span>
  <br><br>
  
  سطح :
  <input type="radio" name="s1" <?php if (isset($s1) && $s1=="female") echo "checked";?> value="مبتدی">مبتدی
  <input type="radio" name="s1" <?php if (isset($s1) && $s1=="male") echo "checked";?> value="متوسط">متوسط
   <input type="radio" name="s1" <?php if (isset($s1) && $s1=="male") echo "checked";?> value=" خوب"> خوب
    <input type="radio" name="s1" <?php if (isset($s1) && $s1=="male") echo "checked";?> value="پیشرفته">پیشرفته
		<br>
		
	مهارت : <input type="text" name="mh2" value="<?php echo $mh2;?>">
  <span class="error">* <?php echo $mh2Err;?></span>
  <br><br>
  
  سطح :
  <input type="radio" name="s2" <?php if (isset($s2) && $s2=="female") echo "checked";?> value="مبتدی">مبتدی
  <input type="radio" name="s2" <?php if (isset($s2) && $s2=="male") echo "checked";?> value="متوسط">متوسط
   <input type="radio" name="s2" <?php if (isset($s2) && $s2=="male") echo "checked";?> value=" خوب"> خوب
    <input type="radio" name="s2" <?php if (isset($s2) && $s2=="male") echo "checked";?> value="پیشرفته">پیشرفته
		<br>
		
			مهارت : <input type="text" name="mh3" value="<?php echo $mh3;?>">
  <span class="error">* <?php echo $mh3Err;?></span>
  <br><br>
  
  سطح :
  <input type="radio" name="s3" <?php if (isset($s3) && $s3=="female") echo "checked";?> value="مبتدی">مبتدی
  <input type="radio" name="s3" <?php if (isset($s3) && $s3=="male") echo "checked";?> value="متوسط">متوسط
   <input type="radio" name="s3" <?php if (isset($s3) && $s3=="male") echo "checked";?> value=" خوب"> خوب
    <input type="radio" name="s3" <?php if (isset($s3) && $s3=="male") echo "checked";?> value="پیشرفته">پیشرفته
		<br>
		
  <h2>اطلاعات و توضیحات بالغ بر این فرم را در کادر زیر وارد کنید</h2>
		 توضیحات: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
		
  <input type="submit" name="submit" value="ثبت">  
</form>


	
<?php
echo "<h2>اطلاعات وارد شده:</h2>";
echo "<b>مشخصات فردی:</b><br>";
echo "<br>";
echo $name;
echo "<br>";
echo $gender;
echo "<br>";
echo $birthday;
echo "<br>";
echo $taahol;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";

echo "<b>تحصیلات:</b><br>";
echo "<br>";
echo $madrak;
echo "<br>";
echo $reshte;
echo "<br>";
echo $uni;
echo "<br>";

echo "<b>دانش و مهارت:</b><br>";
echo "<br>";
echo $mh1;
echo "   :   ";
echo $s1;
echo "<br>";
echo "<br>";

echo $mh2;
echo "   :   ";
echo $s2;
echo "<br>";
echo "<br>";

echo $mh3;
echo "   :   ";
echo $s3;
echo "<br>";
echo "<br>";

echo "<b>توضیحات:</b><br>";
echo "<br>";
echo $comment;

?>



</body>
</html>


