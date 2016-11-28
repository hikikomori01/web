<?php
	mysql_connect("localhost","root","");
	mysql_select_db("booking");

//if(isset($_POST['purpose'])){
  //if (is_array($_POST['purpose'])) {
    //foreach($_POST['purpose'] as $pur_pose){
    //}
  //} else {
    //$pur_pose = $_POST["purpose"];
		//$pur_pose = implode(","$_POST['purpose']);
  //}
//}



		$strSQL = "INSERT INTO booking (firstname,lastname,gender,age,telephone,email,amount,time,visiter,purpose) VALUES ('".$_POST["first_name"]."',
		'".$_POST["last_name"]."','".$_POST["gender"]."','".$_POST["age"]."','".$_POST["icon_telephone"]."',
		'".$_POST["email"]."','".$_POST["amount"]."','".$_POST["timeOption"]."','".$_POST["visiter"]."',$pur_pose)";
		$objQuery = mysql_query($strSQL);

		echo "Register Completed!<br>";

		echo "<br> Go to <a href='index.php'>Fibo Visiting</a>";


	mysql_close();
?>
