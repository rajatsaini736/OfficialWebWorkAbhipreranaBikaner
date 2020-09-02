<?php
session_start();
include('function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Abhipreran</title>
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
    margin-left: 1%;
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
    font-size: 100%;
    margin-top: 10%;
    margin-left: 10%;
  }

  .best-txt{
    font-size: 100%;
    margin-top: 3%;
    margin-left: 10%;
  }

   .sub-head{
    margin-left: 10%;
    font-size: 100%;
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
  top: 450%;
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


    <h2 class="display-4" style="text-align: center; font-weight: bold;">SSC CGL Exam Pattern & Syllabus 2019-20</h3>

  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Number of Question</th>
      <th style="text-align: left;">Total Marks</th>
    </tr>
    <tr>
      <td>General Intelligence and Reasoning</td>
      <td>25 </td>
            <td>50 </td>
    </tr>
    <tr>
      <td>General Awareness</td>
      <td>25</td>
            <td>50</td>
    </tr>
    <tr>
      <td>Quantitative Aptitude</td>
      <td>25</td>
            <td>50</td>
    </tr>
    <tr>
      <td>English Comprehension</td>
      <td>25</td>
      <td>50</td>
    </tr>
  </table>



    <h3 class="sub-head">Tier-1 Exam Pattern</h3>
    <p class="best-txt">&rarr; Online objective type exam will be conducted.</p>
    <p class="best-txt">&rarr; Number of questions = 100 , total marks = 200, exam duration = 1 hour.</p>
    <p class="best-txt">&rarr; Negative marking of 0.5 marks deducted for each wrong answer</p>   

  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Number of Question</th>
      <th style="text-align: left;">Total Marks</th>
    </tr>
    <tr>
      <td>Paper 1- quantitative abilities</td>
      <td>100</td>
      <td>200</td>
    </tr>
    <tr>
      <td>Paper 2- English language & comprehension</td>
      <td>200</td>
      <td>200</td>
    </tr>
    <tr>
      <td>Paper 3- Statistics</td>
      <td>100</td>
      <td>200</td>
    </tr>
    <tr>
      <td>Paper 4- General Studies</td>
      <td>100</td>
      <td>200</td>
    </tr>
  </table>



    <h3 class="sub-head">Tier-2 Exam Pattern</h3>
    <p class="best-txt">&rarr; Online objective type exam will be conducted.</p>
    <p class="best-txt">&rarr; 4 papers, (paper-1) quantitative ability, (paper-2) english language and comprehension, (paper-3) statistics and (paper-4) general studies</p>
    <p class="best-txt">&rarr; Paper-1 and 2 is compulsory for all posts and Paper-3 is only for the post of "statistical investigator Gr. 2" and "compiler" and paper-4 is only for the post of "assistant audit officer".</p>
    <p class="best-txt">&rarr; Each paper carries 200 marks and exam duration is two hours for each paper</p>
    <p class="best-txt">&rarr; Negative marking of 0.50 marks in paper-1,3,4 and 0.25 marks in paper-2</p>

    <h3 class="sub-head">Tier-3 Exam Pattern</h3>
    <p class="best-txt">&rarr; This exam carries 100 marks and time is 60 minutes. Exam duration will be 80 minutes for 'VH' and 'Cerebral Palsy' candidates.</p>
    <p class="best-txt">&rarr; Candidates need to write essay/ precis/ letter/ application writing etc.</p>
    <p class="best-txt">&rarr; Descriptive type exam. Conducted offline.</p>

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