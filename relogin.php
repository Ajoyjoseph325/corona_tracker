<?php
session_start();
  $id = $_SESSION['id'];
if(!$id){
?>
<script>
window.location="index.html";
</script>
<?php
}
include 'database.php';
 $username =$_SESSION['username'];

$user = $_SESSION['Name'];
  $user ;
   $date=date("d-m-y");
		  date_default_timezone_set("Asia/Calcutta");
$time=date("h:i:sa");
if(isset($_POST['reenter'])){
	 $reentlot=$_POST['reentlot'];
	 $reentlotid=$_POST['reentlotid'];
		$curlots=$_POST['curlots'];	
	$upnow=$curlots+$reentlot;
			 $sql ="UPDATE shopregister SET lots='$upnow' WHERE sid=$reentlotid";
				if($conn->query($sql)=== TRUE) 
	{
					$sqlmp="INSERT INTO `dailybook`( `shopid`, `userid`,`Name`, `members`, `date`, `time`, `positive`) VALUES ('$reentlotid','$id','$user','$reentlot','$date','$time','')";
				$conn->query($sqlmp);
				 $inseid = $conn -> insert_id;
				$_SESSION['inseid'] = $inseid;
        echo '<script>alert("updating")</script>';
    }
       else
    { 
	   echo '<script>alert("error_up")</script>';
	   echo"". $conn->error;
    }
	}
?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Minimal login and signup forms Responsive Widget Template : W3layouts</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />


    <!-- fontawesome v5 -->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <section class="forms">
        <div class="container">
            <!-- logo -->
            <div class="logo">
                <a class="brand-logo" href="index.html">WELCOME <?php echo $user ;?>   </a>
               
            </div>
            <!-- //logo -->
            <div class="forms-grid">

                <!-- login -->
                <div class="login">
    <?php                
$sql = "SELECT * FROM shopregister WHERE sid=$reentlotid";
                                    $result=$conn->query($sql);
                                    if($result->num_rows>0)
                                    { 
                                $row = $result->fetch_assoc();
                                    $lots=$row['lots'];
										
										?>
									<div class="form-row">
                                    
                                    <label class="form-label" for="input"><?php echo $row['shopname']; ?></label><br>
										<label class="form-label" for="input">No. Person Entered <span style="color: #CF4547;"><?php echo $reentlot ?></span></label> <br>
									</div>
										 
									
									<?php  } ?>
					<form action="exit.php" method="post" class="login-form">
							<input style="display: none;"  name="num_lots" value="<?php  echo $reentlot ?>" >
							<input style="display: none;" name="idm" value="<?php  echo $reentlotid ?>" >
							<input style="display: none;" name="updatelot" value="<?php  echo $lots ?>" >
									
							<input class="btn btn-login" type="submit" name="exit" value="EXIT">
                                              
                                        </form>

                </div>
				
                <!-- //login -->

                
            </div>

            <!-- copyright -->
            <div class="copy-right">
                <p>&copy; 2020 Minimal Forms. All rights reserved | Design by <a href="http://w3layouts.com/"
                        target="_blank">W3layouts</a></p>
            </div>
            <!-- //copyright -->
        </div>
    </section>

</body>

</html>