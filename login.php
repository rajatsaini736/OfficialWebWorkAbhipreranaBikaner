<?php
	include('db.php');

	$email = "";
	$password = "";
	$database = "defenceguru_abhiprerana";
	$loginErr = "";

if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['Login']))
  {

    $email = $_POST['email'];
    $password = $_POST['password'];


    mysqli_select_db($conn,$database);

    $quer = "SELECT `name`,`email`,`mobile`,`password` FROM `user_info` WHERE `email`='$email'";
    
    $result = $conn->query($quer);

    #matching password with database
    if($result->num_rows>0)
    {
        while($data = $result->fetch_assoc())
        {
        if($data["password"]===$password)
        {
          if (session_status() == PHP_SESSION_NONE) {
              session_start();
          }


          $_SESSION['name'] = "";

          $_SESSION['email'] = "";

            $_SESSION['password'] = "";

          $_SESSION['mobile'] = "";

          $_SESSION['admin'] = "";

          $_SESSION['name'] = $data["name"];

          $_SESSION['email'] = $data["email"];

            $_SESSION['password'] = $data["password"];

          $_SESSION['mobile'] = $data["mobile"];

          if($data["email"] === "abhiprerana@gmail.com"){
            $_SESSION['admin'] = $data["name"];
                       // header('Location: http://monitorseducation.com/index.php');
          header('Location: index.php');
            session_write_close() ;  
          }
          else{
           // header('Location: http://monitorseducation.com/index.php');
          header('Location: index.php');
            session_write_close() ;  
          }  



          }
          else
          {
            $loginErr = "Incorrect Password";
          }
        }
    }
    else{
      $loginErr = "Please Sign-up first";
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
  background-color: #ffe6e6;
  display: block;
  padding: 5px;
  width: 95%;
}

.login-submit{
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

.signup{
  text-align: center;
}

.register{
  color: #660000;
  text-decoration: none;
  padding: 5px;
}

@media screen and (max-width: 600px){
  .lform-login{
  border: 10px solid #f1f1f1;
  border-radius: 10px;
  margin: 5%;
  margin-top: 35%;
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

.login-submit{
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
      echo $loginErr;
      ?></p>
    <div class="login-container">
      <label class="login-label">Email</label>
      <input type="text" name="email" placeholder="Your Email" required>

      <label class="login-label">Password</label>
      <input type="password" name="password" placeholder="Your Password" required>

      <input type="submit" name="Login" value="Login" class="login-submit" >
    </div>

<div  style="background-color:#f1f1f1">
    <div class="signup"><a class="register" href="signup.php"> Register An Account </a></div>
<!--     <div class="psw"> <a class="forgot" style="" href="#">Forgot Password?</a></div> -->
  </div>
  </form>

</body>
</html>