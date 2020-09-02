<?php

session_start();
include('db.php');
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
?>

<!DOCTYPE html>
<html>
<head>
<title>Abhiprerana</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

<?php 

$sql = "SELECT `name`,`email`,`mobile` FROM `user_info` ORDER BY `uid` DESC";
    $result = $conn->query($sql);
    #matching password with database
    if($result->num_rows>0)
    {
      echo '<table border="1">';
      //make the column headers what you want in whatever order you want
      echo '<tr><th>User Name</th><th>User Email</th><th>User Mobile</th></tr>';
      //loop the query data to the table in same order as the headers
      while ($row = mysqli_fetch_assoc($result)){
          echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['mobile']."</td></tr>";
      }
      echo '</table>';
    }

?>

</body>
</html>