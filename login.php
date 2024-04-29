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
 $num =$_SESSION['num'];

$user = $_SESSION['Name'];
  $user ;
date_default_timezone_set("Asia/Calcutta");
  $lastdd=  date("Y-m-d H:i:s:m:m");
    ?>
   

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>shop</title>

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
<style>
.custom-file-input {
  color: transparent;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
.custom-file-input::before {
  content: 'Upload Report';
 	align-items: center;
    background: #4d61fc;
    border-radius: 6px;
    border: 0;
    color: #fff;
    cursor: pointer;
    display: inline-flex;
    font-size: 16px;
    padding: 15px;
    transition: 0.2s;
    font-weight: 600;
}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active {
  outline: 0;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
}

body {
  padding: 20px;
}	
</style>
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
                <div class="login" >
                   

                    <form action="login.php" method="post" class="login-form">
                        <fieldset>
                            <div class="form">
                                <div class="form-row" >
									<?php
										if(!isset($_POST['enter'])) { ?>
                                    <span class="fas fa-caret-square-down"></span>
                                    <label class="form-label" for="input">Select</label>

                                    <select name="shop" class="form-text">
                                    <?php 
											$approveddd="APPROVED";
                                    $sql = "SELECT * FROM shopregister WHERE approve='$approveddd'";
                                    $result=$conn->query($sql);
                                    if($result->num_rows > 0)
                                    { 
                                while ($row = $result->fetch_assoc())
                                {
                                    ?>
                                    
                                        
                                        <option  value="<?php echo $row['sid']; ?>" ><?php echo $row['shopname'] ; ?></option>
                                        <?php } } ?>
                                       
                                    </select>
                                    <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input">No.persons</label>
                                    <input type="text" name="num_lots" class="form-text">
                                </div>
                                    <div class="form-row button-login">
										
										
										<input class="btn btn-login" type="submit" name="enter" value="ENTER">

                                    <?php } ?>
                                              </form>
									<?php 
							if(isset($_POST['enter'])) { 
                                             
                                $num_lots=$_POST['num_lots'];
                              $idm=$_POST['shop'];
                             $idm ;
                            
                             $sql = "SELECT * FROM shopregister WHERE sid=$idm";
                                    $result=$conn->query($sql);
                                    if($result->num_rows>0)
                                    { 
                                $row = $result->fetch_assoc();
                                     $lots=$row['lots'];
										  $fixlots=$row['fixlots'];
									   $shopcategr=$row['category'];
										  $shoppin=$row['pincode'];
										
										?>
									<div class="form-row">
                                    
                                    <label class="form-label" for="input"><?php echo $row['shopname']; ?></label><br>
<!--
										<label class="form-label" for="input">No. Person Entered <span style="color: #CF4547;"><?php// echo $num_lots ?></span></label> <br>
										<label class="form-label" for="input">Current vacancy : <span style="color: #CF4547;"><?php// echo $lots ?></span></label> <br>
										<label class="form-label" for="input">Cappacity : <span style="color: #CF4547;"><?php// echo $fixlots ?></span></label> <br>-
-->
									</div>
										 
									
								<?php
	 $seeee	=$num_lots+$lots-'1';										
        }

if( $fixlots < $seeee ){
											echo "lots r ful or near by no shop";
										}
										else {
											
										


 $fixlots;
 
$now=$num_lots+$lots;
 $now;
if ($fixlots <= $now - 1 ) {
  $mpin = $shoppin-4;
$npin= $shoppin+4;
 
	   $sql = "SELECT * FROM shopregister WHERE category = '$shopcategr' AND pincode  BETWEEN $mpin AND $npin AND sid!='$idm'";
  $result=$conn->query($sql);
  if($result->num_rows > 0)
   { 
    while ($row = $result->fetch_assoc())
    {
   
      $nsid= $row['sid']; 
		
		   $nlots= $row['lots'];
		   $nfixlots= $row['fixlots'];
		if( $nfixlots <= $nlots){
			
			//echo "full" ;
		}
  else{
	  ?>
		  <div class="form-row">
			  <br>
			  <label class="form-label" for="input" style="color: red;">IF YOU WANT TO MOVE</label><br>
 <label class="form-label" for="input"><?php   echo $nshopname= $row['shopname'];  ?></label>
          </div>
		<form action="relogin.php" method="POST">
		 <?php 
	  
	
	$nlots= $row['lots'];
	$nfixlots= $row['fixlots'];
	$ballots=$nfixlots-$nlots;
	?><input type="text" name="reentlot" style="display: none;"  value="<?php echo $num_lots ; ?>">
		<input type="text" name="reentlotid" style="display: none;"    value="<?php echo $row['sid']; ?>">	
			<input type="text" name="curlots" style="display: none;"    value="<?php echo $row['lots']; ?>">	
	<?php
	if($ballots<=$num_lots )
	{ ?>
	<div class="form-row"><label class="form-label" for="input">
		<?php   echo "Only ".$ballots." available"; ?>
		</label> </div>
		 <?php 
	  }
	  else {
		  ?>
		  
			 
		  <input class="btn btn-login" type="submit" name="reenter" value="RE ENTER">
		 </form>
				<?php
	
	  } } } } }
	  else {
  	$date=date("Y-m-d");
		  date_default_timezone_set("Asia/Calcutta");
 $time=date("H:i:s:m:m");
		  
		
		 
		if(isset($_POST['enter'])){
			  $sql ="UPDATE shopregister SET lots='$now' WHERE sid=$idm";
			if($conn->query($sql)=== TRUE) 
	{
		  $sqlmp="INSERT INTO `dailybook`( `shopid`, `userid`,`Name`, `members`, `date`, `time`, `positive`,`in_date_time`,`pnum`) VALUES ('$idm','$id','$user','$num_lots','$date','$time','','$lastdd','$num')";
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
	}
											}
    ?>
<div class="form-row" >
 </div>
						<form action="exit.php" method="post" class="login-form">
							<input type="hidden" name="num_lots" value="<?php  echo $num_lots ?>" >
							<input type="hidden" name="idm" value="<?php  echo $idm ?>" >
							<input type="hidden" name="updatelot" value="<?php  echo $now ?>" >
									<br>
							<br>
							<input class="btn btn-login" type="submit" name="exit" value="EXIT">
                                              
                                        </form>
                                <?php } ?>
									<form action="login.php" method="post" enctype="multipart/form-data">
									<div style="margin-top: 15px; " class="form-row bottom">
                                    <div class="form-check">
										
 <input type="file" name="healthfile" class="custom-file-input" required>
  
										<br>
										</br>
                                        <input type="checkbox"  id="positive" name="positive" value="1" required>
										
                                        <label for="positive"> Covid Positive</label><br>
										<input class="btn btn-login" type="submit" name="positive" value="REPORT">
                                    </div>
                                    
                                </div>
										</form>
                            </div>
                        </fieldset>
                     
                </div>
                <!-- //login -->
            </div>

            <!-- copyright -->
           
            <!-- //copyright -->
        </div>
    </section>

</body>

</html>
	<?php
	if(isset($_POST['positive'])){
	
									 $id;
									 $coronadate=date("Y-m-d");
									 $coropos=date('Y-m-d', strtotime('-3 days'));
		
		
		$ddlastdd= date("Y-m-d H:i:s:m:mA" , strtotime('-3 days'));
		
		  
	 $pos=date('Y-m-d', strtotime('+7 days'));
		
		
		  $sqlm = "SELECT * FROM `dailybook` WHERE `date` BETWEEN '$coropos' AND '$coronadate'   AND `userid`='$id'";
		
  $resultm=$conn->query($sqlm);
  
    $rowm = $resultm->fetch_assoc();
    
   
      $in_date_time= $rowm['in_date_time']; 

               $sqlmm = "SELECT * FROM `dailybook` WHERE `in_date_time` BETWEEN '$in_date_time' AND '$lastdd' AND `userid`='$id'";
	//echo "SELECT * FROM `dailybook` WHERE `in_date_time` BETWEEN '2021-02-15 10:43:45.805000' AND '2021-02-19 17:43:45.000000' ORDER BY `did` ASC";

  $resultmm=$conn->query($sqlmm);
  if($resultmm->num_rows > 0)
   { 
    while ($rowmm = $resultmm->fetch_assoc())
    {
   
      $shopid= $rowmm['shopid']; 
       $userid= $rowmm['userid'];
       $did= $rowmm['did']; 
		  $situm= $rowmm['time']; 
		 $dateeeeed= $rowmm['date'];
		 $timee= $rowmm['exit_time']; 
		$updat='22:46:01.654000';
		
		 
		  $sql ="UPDATE dailybook SET positive='$pos' WHERE date='$dateeeeed' AND time BETWEEN '$situm' AND '$updat' AND shopid='$shopid'";
            $conn->query($sql);
		  $sqlsms = "SELECT * FROM `dailybook` WHERE date='$dateeeeed' AND time BETWEEN '$situm' AND '$updat' AND shopid='$shopid' ";

  $resultsms=$conn->query($sqlsms);
  if($resultsms->num_rows > 0)
   { 
    while ($rowsms = $resultsms->fetch_assoc())
    {
		 
		  $rowsms['userid'];
		echo $smsnumber[]= $rowsms['pnum'];
		
	}}
		

		
      $sql ="UPDATE dailybook SET positive='$pos' WHERE userid='$id' AND date BETWEEN '$coropos' AND '$coronadate' AND exit_time BETWEEN '$timee' AND '$updat' OR shopid='$shopid' ";
            $conn->query($sql);
		echo"<br>";
           
}
	  print_r(array_unique($smsnumber));
}
		
 $sqlmm = "SELECT * FROM `dailybook` WHERE positive='$pos'";

  $resultmm=$conn->query($sqlmm);
  if($resultmm->num_rows > 0)
   { 
    while ($rowmm = $resultmm->fetch_assoc())
    {
   
     
        $userid= $rowmm['userid'];
		$folder_path = 'uploads/';

    $filename = basename($_FILES['healthfile']['name']);
    $newname = $folder_path . $filename;

    $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "jpg" || $FileType == "pdf" || $FileType == "jpge" || $FileType == "png" || $FileType == "JPG" || $FileType == "JPGE" || $FileType == "PDF" || $FileType == "PNG")
    {
     
		if (move_uploaded_file($_FILES['healthfile']['tmp_name'], $newname))
        {
      
       $sql ="UPDATE dailybook SET positive='$pos',report='$filename' WHERE userid='$id'";
            $conn->query($sql);
		
        echo "<script>
alert('Covid Repoted-all close contact peoples received E-mail');
window.location.href='index.html';
</script>";   
}
}
	} }
		 
	}
										?>