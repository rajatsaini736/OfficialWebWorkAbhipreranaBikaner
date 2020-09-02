<?php
session_start();
include('function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Abhiprerana</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">


<!-- FA FA-Bars -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

<style type="text/css">
    .lead{

    margin: 50px;
    text-align: justify;
  }
  .ssc-img{
    margin-left: 40%;
    width: 20%;
  }

  .best-txt{
    margin: 50px;
    text-align: justify;
  }

  .best{
    font-weight: bold;
    margin-top: 5%;
    margin-left: 3%;
  }

  .best-best-txt{
    margin-top: 1%;
    margin-left: 3%;
  }

  .sub-head{
    margin-left: 3%;
  }
table{
  width: 50%;
  margin-left: 25%;
  margin-bottom: 5%;
}

table, th, td{
  text-align: left;
  border: 1px solid black;
  border-collapse: collapse;
}

@media screen and (max-width: 600px){
    .lead{
      font-size: 100%;
    margin: 50px;
    text-align: justify;
  }

  .display-4{
  font-size: 130%;
}

  .ssc-img{
    margin-left: 25%;
    width: 50%;
  }

  .best{
    font-size: 100%;
    font-weight: bold;
    margin-top: 10%;
    margin-left: 10%;
  }

  .best-txt{
    margin-top: 3%;
    margin-left: 10%;
  }

  .best-best-txt{
    font-size: 100%;
    margin-top: 3%;
    margin-left: 10%;
  }

   .sub-head{
    font-size: 100%;
    margin-left: 10%;
  }
  table{
  width: 100%;
  margin-left: 1%;
  margin-bottom: 5%;
}

table, th, td{
  text-align: left;
  border: 1px solid black;
  border-collapse: collapse;
}

footer{
    background-color: #00001a;
    color: white;
  top: 140%;
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

<div class="jumbotron">


  <h3 class="best">RPSC LDC Syllabus</h3>
  <p class="best-txt">RPSC organise LDC exam for the post of Lower Division Clerk. The exam is based on objective type questions. Maximum marks = 100 and total questions = 100.</p>

<h3 class="best">Paper 1 (Duration 180 minutes)</h3>
  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Exam Paper Sections</th>
      <th style="text-align: left;">Total Question</th>
      <th style="text-align: left;">Maximum Marks</th>
    </tr>
    <tr>
      <td>Aptitude </td>
      <td rowspan="3">150</td>
      <td rowspan="3">100</td>
    </tr>
    <tr>
      <td>General knowledge + general science</td>
    </tr>
    <tr>
      <td>Elementary Mathematics</td>
    </tr>

  </table>

<h3 class="best">Paper 2 (Duration 180 minutes)</h3>
  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Exam Paper Sections</th>
      <th style="text-align: left;">Total Question</th>
      <th style="text-align: left;">Maximum Marks</th>
    </tr>
    <tr>
      <td>Hindi (General)</td>
      <td>75</td>
      <td>75</td>
    </tr>
    <tr>
      <td>English (General)</td>
      <td>75</td>
      <td>75</td>      
    </tr>


  </table>


</div>

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