<?php
session_start();
include 'database.php';
if(isset($_POST["myusername"]))
{
	
			$username=mysqli_real_escape_string($conn, $_POST["myusername"]);
			$password=mysqli_real_escape_string($conn, $_POST["mypassword"]);
			$query="SELECT * FROM register WHERE Email='$username'";
			$result = mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array($result))
				{
					$password ; $row['Password'];

					if($password==$row["Password"] )
					{
						$id=$row["id"];
						$name=$row["Name"];


					
						$_SESSION['username'] = $username;
						$_SESSION['id'] =$id;
						$_SESSION['Name'] =$name;
						header("location:login.php");
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