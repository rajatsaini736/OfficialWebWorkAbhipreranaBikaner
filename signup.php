<?php

include("db.php");

$name = $signupErr = $email = $password = $cpassword = $mobile = "";
$database = "defenceguru_abhiprerana";


if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['password']) && !empty($_POST['cpassword']) && !empty($_POST['Signup']) && !empty($_POST['address'] && !empty($_POST['pincode'])) ){

	if ($_POST['password'] == $_POST['cpassword']) {

	$name = $_POST['name'];
	$email = $_POST['email'];
  $mobile = $_POST['mobile'];
	$password = $_POST['password'];
  $address = $_POST['address'];
  $pincode = $_POST['pincode'];

	$check = 0;
	mysqli_select_db($conn,$database);

    $quer = "SELECT * FROM `user_info` WHERE `email`='$email';";
    $result = mysqli_query($conn,$quer);

    if($result->num_rows>0)
    {
      while($data = $result->fetch_array())
      {
        $check ++;

      }
    }

    #if user is new then register it
    if($check==0)
    { 
      $sq = "INSERT INTO `user_info` (`name`,`email`,`password`,`mobile`,`address`,`pincode`) VALUES ('$name','$email','$password','$mobile','$address', '$pincode')";

      if(mysqli_query($conn,$sq))
      {

        session_start();
        $_SESSION['name'] = "";
        $_SESSION['email'] = "";
        $_SESSION['mobile'] = "";
        $_SESSION['address'] = "";
        $_SESSION['pincode'] = "";
    
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['address'] = $address;
        $_SESSION['pincode'] = $pincode;
    
    	// header('Location: http://monitorseducation.com/index.php');
            header('Location: index.php');
        session_write_close();
      }

    }
    else
    {
      $signupErr = "You are already register, plz log-in";
    }
	}
	else{
		$signupErr = "Password and Confirm Password should be the same";
	}


}


?>
<!DOCTYPE html>
<html>
<head>
  <title>Abhiprerana</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
  
.lform-login{
  border: 10px solid #f1f1f1;
  border-radius: 10px;
  margin: 10%;
  margin-left: 20%;
  width: 60%;
}

.login-container{
  padding: 16px;
  display: block;
}

.login-label{
  display: block;
  padding: 5px;
  font-weight: bold;
}

input[type=text],input[type=password]{
  background-color:#ffe6e6;
  display: block;
  padding: 5px;
  width: 95%;
}

.signup-submit{
  background-color: #660000;
  color: white;
  padding: 5px;
  margin-top: 10px;
  margin-left: 35%;
  width: 30%;
  max-width: 30%;
  display: block;
  font-weight: bold;
}

.signin{
  text-align: center;
}

.login{
  color: #660000;
  text-decoration: none;
  padding: 5px;
}

@media screen and (max-width: 600px){
  .lform-login{
  border: 10px solid #f1f1f1;
  border-radius: 10px;
  margin: 5%;
  margin-top: 20%;
  margin-left: 5%;
  width: 85%;
}

.login-container{
  padding: 16px;
  display: block;
}

.login-label{
  display: block;
  padding: 5px;
  font-weight: bold;
}

input[type=text],input[type=password]{
  background-color: #ffe6e6;
  display: block;
  padding: 5px;
  width: 95%;
}

.signup-submit{
  background-color: #660000;
  color: white;
  padding: 5px;
  margin-top: 10px;
  margin-left: 35%;
  width: 30%;
  max-width: 30%;
  display: block;
}
}

</style>

</head>
<body>
  <form class="lform-login" method="POST">
 <p style="color:red; background-color:  #ffcc99;"><?php
  echo $signupErr;
  ?></p>
    <div class="login-container">

      <label class="login-label">Name</label>
      <input type="text" name="name" placeholder="Your Name"required>

      <label class="login-label">Email</label>
      <input type="text" name="email" placeholder="Your Email" required>

      <label class="login-label">Mobile</label>
      <input type="text" name="mobile" placeholder="Your Mobile" required>

      <label class="login-label">Password</label>
      <input type="password" name="password" placeholder="Your Password" required>

      <label class="login-label">Confirm Password</label>
      <input type="password" name="cpassword" placeholder="Your Confirm Password" required>

      <label class="login-label">Address</label>
      <input type="text" name="address" placeholder="Your Address" required>

      <label class="login-label">Pincode</label>
      <input type="text" name="pincode" placeholder="Your Pin Code" required>

      <input type="submit" name="Signup" value="Signup" class="signup-submit" >
    </div>

  <div  style="background-color:#f1f1f1">
    <div class="signin"><a class="login" href="login.php"> Already Have An Account </a></div>
  </div>
  </form>
</body>
</html>