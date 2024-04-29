<?php

if(isset($_POST['submit'])) {
	
    include "database.php";

	$name=$_POST['name'];
	 $name;
	$address=$_POST['Address'];
	 $address;
	$pincode=$_POST['Pincode'];
	 $pincode;
	$phone=$_POST['Phone'];
	 $phone;
	$email=$_POST['email'];
	 $email;
	$password=$_POST['password'];
	 $password;
	 $sql="INSERT INTO register(name,Address,Pincode,Phonenumber,Email,password)
	VALUES('$name','$address','$pincode','$phone','$email','$password')";
	if ($conn->query($sql)===TRUE) {
		echo"New record created succesfully";
		header("location:index.html");
		# code...
	}else{
			echo "error:".$sql."<br>".$conn->error;

	}
	$conn->close();
}
?>