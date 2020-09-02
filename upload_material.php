<?php 
session_start();
include ('function.php');
include ('db.php');

$err = "";
$succ = "";


if(!empty($_POST["submit"])){

	$title = $_POST["title"];

	$tmp_name = $_FILES['img']['tmp_name'];
	$name = $_FILES['img']['name'];

	         $update=date("Ymdhis");
	         $date = date("ymd");
	         $file = $update."-".$name;	

	if(move_uploaded_file($tmp_name, "Images/Material/".$file)){
			$sql = "INSERT INTO material(`title`,`name`,`date`) VALUES ('$title','$file','$date')";
	if(mysqli_query($conn,$sql)){
		$succ =  "file uploaded ";
	}
	else{
		$err = "Failed to upload";
	}
	}
	else{
		$err = "Failed to Upload";
	}



}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Abhiprerana</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; margin: 10%;}

input[type=text], input[type=password] {
	background-color: #ffe6e6;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.loginbtn {
  background-color: #660000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  margin-left: 25%;
  margin-right: 25%;
  border: none;
  cursor: pointer;
  width: 50%;
  font-weight: bold;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}

.register{
  text-decoration: none;
  color:#0000ff;
  margin-left: 45%; 
  margin-top: 10%;
}

.forgot{
  text-decoration: none;
   color:#0000ff; 
   margin-left: 46%; 
   margin-top: 10%;
}


@media screen and (max-width: 600px){

form {border: 3px solid #f1f1f1; margin: 10%;}

input[type=text], input[type=password] {
  background-color: #ffe6e6;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.loginbtn {
  background-color: #660000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  margin-left: 25%;
  margin-right: 25%;
  border: none;
  cursor: pointer;
  width: 50%;
  font-weight: bold;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}

  span.psw {
     display: block;
     float: none;
  }
.register{
  margin-left: 22%; 
  margin-top: 10%;
}

.forgot{
   margin-left: 24%; 
   margin-top: 10%;
}

footer{
	background-color: #00001a;
  color: white;
	top: 108%;
	height: 50%;
	position: initial;
	display: block;
	padding: 1%;
	width: 101%;
	margin-left: 0%;
	margin-right: -5%;
}

}
</style>

</head>
<body>

<?php
navbar();
?>



<form  method="post" enctype="multipart/form-data">
 <p style="color:red; background-color:  #ffcc99;"><?php
 	echo $err;
  ?></p>
   <p style="color:green; background-color:#66ff99;"><?php
 	echo $succ;
  ?></p>
  <div class="container">	

    <label for="title"><b>Title</b></label>
    <input type="text" placeholder="Enter Title" name="title" required>

    <label for="file"><b>File/PDF</b></label>
    <input type="file" name="img" id="img" class="form-control" placeholder="Product Image" required="required">
        
      <input type="submit" class="loginbtn" name="submit" value="Submit">
  </div>

</form>

<?php
footer();
?>

<script>
  
function myFunction(){
  var x = document.getElementById("navcontainer");
  if(x.className == "top-navbar"){
    x.className += " responsive";
  }
  else{
    x.className = "top-navbar";
  }

}

</script>

</body>
</html>