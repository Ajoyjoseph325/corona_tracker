<?php
session_start();
include 'database.php';
 $coronadate=date("Y-m-d");
//$latup="2021-02-01";
  $querys="SELECT * FROM `dailybook` WHERE positive <='$coronadate'";
			$results = mysqli_query($conn,$querys);
			mysqli_num_rows($results)>0;
			while($rows = mysqli_fetch_array($results))
			{
			  $latup= $rows['did'];
		
		
 $sqluppoh ="UPDATE dailybook SET positive='' WHERE did=$latup";
if($conn->query($sqluppoh)== TRUE) {

 }  else
{  echo"". $conn->error; }	} 

if(isset($_POST["myusername"]))
{


$username=mysqli_real_escape_string($conn, $_POST["myusername"]);
$password=mysqli_real_escape_string($conn, $_POST["mypassword"]);

  		$query="SELECT * FROM register WHERE Email='$username' ";
		$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
	{
	while($row = mysqli_fetch_array($result))
		{	

			$password ; 
			$dpwdd=$row['Password'];

						$name=$row["Name"];
						$email=$row["Email"];
		$pnum=$row["Phonenumber"];
			 $vid=$row['id'];
			//$_SESSION['username'];
			$querys="SELECT * FROM `dailybook` WHERE userid=$vid ORDER BY did DESC LIMIT 1";
			$results = mysqli_query($conn,$querys);
			mysqli_num_rows($results)>0;
			$rows = mysqli_fetch_array($results);
			 $rows['exit_time'];
			$members=$rows['members'];
			$shopid=$rows['shopid'];
			  $inseid=$rows['did'];
			   $positive=$rows['positive'];
			   $lastime=$rows['time'];
			   
			
			if(isset($rows['did']))
			{

			
			
			 date_default_timezone_set("Asia/Calcutta");
			 $time=date("h:i:sa");
			 $querysm="SELECT * FROM `shopregister` WHERE sid=$shopid ";
			$resultsm = mysqli_query($conn,$querysm);
			mysqli_num_rows($resultsm)>0;
			$rowsm = mysqli_fetch_array($resultsm);
			$lots=$rowsm['lots'];
			  $lupm=$lots-$members;
				
				
				if($rows['exit_time']=="")
				{
				
				
				echo "<script>
								alert('user already logged pls relogin ');
								window.location.href='index.html';
								</script>";

$datetime_from = date("H:i:s:m:m",strtotime("+60 minutes",strtotime($lastime)));
 $datetime_from;
  $lastdd= date("Y-m-d g:i a:s:m:m");
				 $sql ="UPDATE shopregister SET lots='$lupm' WHERE sid=$shopid";
				if($conn->query($sql)== TRUE)
                 {
				  $sqlup ="UPDATE dailybook SET exit_date_time='$lastdd', exit_time='$datetime_from' WHERE did=$inseid";
									 $conn->query($sqlup);
									//unset($_SESSION['sid']);
									 unset($_SESSION['id']);
									  unset($_SESSION['inseid']);
									 //unset($_SESSION['num_lots']);
                                 //echo '<script>alert("updating")</script>';
                                 header("location:index.html");
                                 }
                                 else
                                    { echo '<script>alert("error_up")</script>';

                                echo"". $conn->error;

                                }

}


						
						
					}}

					if($coronadate>=$positive)
					{
						
					

					if($password==$dpwdd)
{
			


					
						 $_SESSION['username'] = $email;
						$_SESSION['id'] =$vid;
						$_SESSION['Name'] =$name;
						$_SESSION['num'] =$pnum;
						header("location:login.php");
}

					else
					{

						
echo "<script>
alert('wrong username or password');
window.location.href='index.html';
</script>";
					}
					}
					else{

						
						
    			echo "<script>
alert('You are quarantine, Do not enter before this $positive ');
window.location.href='index.html';
</script>";
					}					
				}

			}


?>