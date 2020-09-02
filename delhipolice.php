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

  .lead{
    margin: 50px;
    text-align: justify;
  }

  .best{
    font-weight: bold;
    margin-top: 5%;
    margin-left: 3%;
  }

  .best-txt{
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

  .lead{
      font-size: 100%;
    margin: 50px;
    text-align: justify;
  }

  .ssc-img{
    margin-left: 25%;
    width: 50%;
  }

  .best{
    font-weight: bold;
    margin-top: 10%;
    margin-left: 10%;
  }

  .best-txt{
    margin-top: 3%;
    margin-left: 10%;
  }

   .sub-head{
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
  top: 180%;
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

  <h2 class="display-4" style="text-align: center; font-weight: bold;">Delhi Police SSC CPO EXAM</h2>

  <p class="best-txt">Delhi Police SSC CPO Exam is a great exam for candidates who want to join best paramilitary forces of India (CRPF, BSF, CISF, ITBP and SSB) as Sub-inspectors and Assistant sub-inspector in CISF. These exams are conducted under SSC Central Police Organisation (CPO) process.</p>



  <h3 class="sub-head">SSC CPO Exam Pattern</h3>
  <p class="best-txt">SSC CPO exam will consists of Paper-I, Physical Standard Test (PST)/Physical Endurance Test (PET), Paper-II and Detailed Medical Examination (DME).</p>


  <h3 class="best">SSC CPO paper-I</h3>  
  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subjects</th>
      <th style="text-align: left;">Questions</th>
      <th style="text-align: left;">Marks</th>
      <th style="text-align: left;">Time</th>
    </tr>
    <tr>
      <td>General Intelligence and Reasoning</td>
      <td>50 </td>
      <td>50 </td>
      <td rowspan="4">2 Hours</td>      
    </tr>
    <tr>
      <td>General Knowledge and General Awareness</td>
      <td>50</td>
      <td>50</td>
    </tr>
    <tr>
      <td>Quantitative Aptitude</td>
      <td>50</td>
      <td>50</td>
    </tr>
    <tr>
      <td>English Comprehension</td>
      <td>50</td>
      <td>50</td>
    </tr>

  </table>

  <h3 class="best">SSC CPO paper-II</h3>  
  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subjects</th>
      <th style="text-align: left;">Questions</th>
      <th style="text-align: left;">Marks</th>
      <th style="text-align: left;">Time</th>
    </tr>
    <tr>
      <td>English Language and Comprehension</td>
      <td>200 </td>
      <td>200 </td>
      <td >2 Hours</td>      
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