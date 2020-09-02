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
}

table, th, td{
  text-align: left;
  border: 1px solid black;
  border-collapse: collapse;
}

@media screen and (max-width: 600px){

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
}

table, th, td{
  text-align: left;
  border: 1px solid black;
  border-collapse: collapse;
}

footer{
    background-color: #00001a;
    color: white;
  top: 500%;
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


  <h2 class="display-4" style="text-align: center; font-weight: bold;">NET Exam</h2>
  <p class="best-txt">University Grants Commission [UGC] conducts the National Eligibility Test [NET] for determining the eligibility of Indian nationals for the post of Assistant Professor only or Junior Research Fellowship[JRF] and Assistant Professor Both, in Indian Universities and Colleges.</p>


<h3 class="sub-head">UGC NET Exam Pattern 2020</h3>
  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Paper</th>
      <th style="text-align: left;">Marks</th>
      <th style="text-align: left;">Questions</th>
      <th style="text-align: left;">Duration</th>
    </tr>
    <tr>
      <td>Paper-I</td>
      <td>100</td>
      <td>50</td>
      <td rowspan="2">3 Hours</td>      
    </tr>
    <tr>
      <td>Paper-II</td>
      <td>200</td>
      <td>100</td>
    </tr>

  </table>

    <h3 class="sub-head">NET/JRF Paper-I Syllabus</h3>

    <p class="best-txt">&rarr; Teaching Aptitude </p>
    <p class="best-txt">&rarr; Research Aptitude </p>
    <p class="best-txt">&rarr; Comprehension </p>
     <p class="best-txt">&rarr; Communication</p> 
    <p class="best-txt">&rarr; Mathematical Reasoning and Aptitude </p>
     <p class="best-txt">&rarr; Logical Reasoning </p>        
     <p class="best-txt">&rarr; Data Interpretation</p> 
    <p class="best-txt">&rarr; Information and Communication Technology (ICT)</p>
     <p class="best-txt">&rarr; People, Development and Environment</p>   
     <p class="best-txt">&rarr; Higher Education Systemt</p> 

    <h3 class="sub-head">NET/JRF Paper-II Syllabus</h3>

    <p class="best-txt">&rarr; UGC NET paper II is based on subjects ( history, political science, economics, hindi ) which is selected by the candidate.</p>



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