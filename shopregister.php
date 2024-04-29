<?php
if(isset($_POST['submit'])){
	include 'database.php';
	$shopname = $_POST['shopname'];
	 $shopname;
	$adress = $_POST['address'];
	 $adress;
	$pincode = $_POST['pincode'];
	 $pincode;
	$phonenumber = $_POST['phone'];
	 $phonenumber;
	$category = $_POST['category'];
	 $category;
	$lots = $_POST['lots'];
	 $lots;
	$email = $_POST['email'];
	 $email;
	$password = $_POST['password'];
	 $password;
	

	$sql="INSERT INTO
	shopregister(shopname,address,pincode,phonenumber,category,lots,fixlots,email,password,approve)
	VALUES('$shopname','$adress','$pincode','$phonenumber','$category','0','$lots','$email','$password','NOT APPROVED')";

	if($conn->query($sql)===TRUE){
		echo"New record created successfully";
		header("location:shopregister.html");
	}
	else{
		echo"error:".$sql."<br>".$conn->error;

	}
		$conn->close();
}
?>