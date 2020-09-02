<?php

session_start();


include('../db.php');
$database = "defenceguru_abhiprerana";

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;




$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {

	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction has successful</b>" . "<br/>";


		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction has failed</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		$ORDERID = $_POST['ORDERID'];
	    $MID = $_POST['MID'];
	    $TXNID = $_POST['TXNID'];
	    $TXNAMOUNT = $_POST['TXNAMOUNT'];
	    $PAYMENTMODE = $_POST['PAYMENTMODE'];
	    $CURRENCY = $_POST['CURRENCY'];
	    $TXNDATE = $_POST['TXNDATE'];
	    $STATUS = $_POST['STATUS'];
	    $RESPCODE = $_POST['RESPCODE'];
	    $RESPMSG = $_POST['RESPMSG'];
	    $GATEWAYNAME = $_POST['GATEWAYNAME'];
	    $BANKTXNID = $_POST['BANKTXNID'];

	    if($PAYMENTMODE == "UPI"){
	    	$BANKNAME = "";
	    }
	    else{
	    	$BANKNAME = $_POST['BANKNAME'];	    	
	    }

	    $CHECKSUMHASH =$_POST['CHECKSUMHASH'];

	    $query = "UPDATE transaction SET `TXNID`='$TXNID', `TXNAMOUNT`= '$TXNAMOUNT', `PAYMENTMODE`='$PAYMENTMODE',`CURRENCY`= '$CURRENCY',`TXNDATE`='$TXNDATE',`STATUS`='$STATUS', `RESPCODE`= '$RESPCODE', `RESPMSG`='$RESPMSG', `GATEWAYNAME`='$GATEWAYNAME',`BANKTXNID`='$BANKTXNID',`BANKNAME`='$BANKNAME',`CHECKSUMHASH`= '$CHECKSUMHASH' WHERE `ORDERID` = '$ORDERID'";

	    // $query = "INSERT into transaction (`TXNID`,`TXNAMOUNT`,`PAYMENTMODE`,`CURRENCY`,`TXNDATE`,`STATUS`,`RESPCODE`,`RESPMSG`,`GATEWAYNAME`,`BANKTXNID`,`BANKNAME`,`CHECKSUMHASH`) 
	    // VALUES ('$TXNID','$TXNAMOUNT','$PAYMENTMODE','$CURRENCY','$TXNDATE','$STATUS','$RESPCODE','$RESPMSG','$GATEWAYNAME','$BANKTXNID','$BANKNAME','$CHECKSUMHASH') WHERE `ORDERID` = '$ORDERID'";

	    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	    

			// foreach($_POST as $paramName => $paramValue) {
			// 		echo "<br/>" . $paramName . " = " . $paramValue;
			// }



		}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
	
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

@media screen and (max-width: 600px){

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

	<form method="" action="../index.php">
		<input type="submit" name="submit" value="Return to home" class="login-submit">
	</form>

</body>
</html>