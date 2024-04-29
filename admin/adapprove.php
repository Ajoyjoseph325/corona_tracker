<?php
include 'database.php';
 $id=$_GET['id'];
$ab="APPROVED";
$ba="NOTAPPROVED";
$query="SELECT * FROM shopregister WHERE sid='$id'";
			$result = mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array($result))
				{
					  echo $appp= $row['approve'];
				} }

if($appp==$ab)
{
	echo $sql = "UPDATE shopregister SET approve='$ba' WHERE sid=$id";

if ($conn->query($sql) === TRUE) {


	echo '<script>alert("Record updated successfully..")</script>';
	header("location:admin.php");
  
} else {
	echo '<script>alert("Error updating record:")</script>';
  
  echo " " . $conn->error;
}
}
else
{
	echo $sql = "UPDATE shopregister SET approve='$ab' WHERE sid=$id";

if ($conn->query($sql) === TRUE) {


	echo '<script>alert("Record updated successfully..")</script>';
	header("location:admin.php");
  
} else {
	echo '<script>alert("Error updating record:")</script>';
  
  echo " " . $conn->error;
}
}

?>