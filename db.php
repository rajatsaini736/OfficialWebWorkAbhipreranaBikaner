<?php
	try {
 $conn = mysqli_connect("localhost","root","rajatsaini","abhiprerana");
         // $conn = mysqli_connect("localhost","defenceguru_ap","F_MEUog*mL99","defenceguru_abhiprerana");
	} catch (mysqli_sql_exception $e) {
		echo $e;
	}
?>