<?php
session_start();
include 'database.php';
if(isset($_POST["myusername"]))
{
			 $username=mysqli_real_escape_string($conn, $_POST["myusername"]);
			 $password=mysqli_real_escape_string($conn, $_POST["mypassword"]);
			  $query="SELECT * FROM shopregister WHERE email='$username'";
			$result = mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array($result))
				{
					
					$password ;  $row['password'];
					$dapp= $row['approve'];
				$app="APPROVED";
				

					if($password==$row["password"] && $app==$dapp)
					{
						$sid=$row["sid"];
						$pincode=$row["pincode"];
						$lots=$row["lots"];
						$fixlots=$row["fixlots"];
						$email=$row["email"];
						$shopname=$row["shopname"];


					
						 $_SESSION['email'] = $email;
						 $_SESSION['sid'] =$sid;
						 $_SESSION['lots'] =$lots;
						 $_SESSION['fixlots'] =$fixlots;
						 $_SESSION['pincode'] =$pincode;
						 $_SESSION['shopname'] =$shopname;
						//$_SESSIOM['name'] =$usertype;
						header("location:shop/index.php");
					
					}
					else
					{
					
					echo "<script>
alert('wrong username or password OR not approved');
window.location.href='shopregister.html';
</script>"; 
						
						//header("location:");

					}

				}
			}
			else
				{
					echo "<script>
alert('wrong username or password OR not approved');
window.location.href='shopregister.html';
</script>"; 

						//header("location:shopregister.html");



				}
}
?>