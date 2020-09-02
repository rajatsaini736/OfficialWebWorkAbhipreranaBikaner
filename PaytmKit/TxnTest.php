<?php
	session_start();
	include('../db.php');
	$database = "defenceguru_abhiprerana";

	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

	$name = $_SESSION["name"];

  if(!empty($_SESSION['name'])){
  	mysqli_select_db($conn,$database);

    $quer = "SELECT * FROM `user_info` WHERE `name`='$name'";
    
    $result = $conn->query($quer);

    #matching password with database
    if($result->num_rows>0)
    {
        while($data = $result->fetch_assoc())
        {
        	
        	$uid = $data["uid"];
        	$_SESSION["uid"] = "";
        	$_SESSION["uid"] = $uid;

        }
    }
  }
  else{
  	header('Location: ../login.php');
  	  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<pre>
	</pre>
	<form id="myForm"  method="post" action="pgRedirect.php">
		<table border="1" style="display: none;">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
			
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $uid ?>"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input type="hidden" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $_SESSION["item_price"] ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="hidden" value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
	</form>
	<h3 style="text-align: center;">Redirecting...</h3>
<script>
var auto_refresh = setInterval(function() { submitform(); }, 3000);

function submitform()
{
  document.getElementById("myForm").submit();
}
</script>

</body>
</html>