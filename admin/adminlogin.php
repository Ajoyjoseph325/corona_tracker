<?php
session_start();
include 'database.php';
if(isset($_POST["myusername"]))
{
			  $username=mysqli_real_escape_string($conn, $_POST["myusername"]);
			  $password=mysqli_real_escape_string($conn, $_POST["mypassword"]);
			  $query="SELECT * FROM admin WHERE username='$username'";
			$result = mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array($result))
				{
					 $password ; $row['password'];

					if($password=$row["password"])
					{
						

					
						 $_SESSION['email'] = $username;
						
						//$_SESSIOM['name'] =$usertype;
						header("location:admin.php");
					}
					else
					{
						$wrong ="wrong username or password";
echo $wrong;
					}					
				}
			}
}
?>