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
 $inseid=$_SESSION['inseid'];
 if(isset($_POST['exit'])){
	 $sidm=$_POST['idm'];
  $num_lots=$_POST['num_lots'];
  $updatelot=$_POST['updatelot'];
    $upd=$updatelot-$num_lots;
         $upd;   
	 date_default_timezone_set("Asia/Calcutta");
	 $lastdd= date("Y-m-d g:i a:s:m:m");
$time=date("H:i:s:m:m");
   $sql ="UPDATE shopregister SET lots='$upd' WHERE sid=$sidm";

                                 if($conn->query($sql)== TRUE)
                                 {
			 $sqlup ="UPDATE dailybook SET exit_date_time='$lastdd',exit_time='$time' WHERE did=$inseid";
									 $conn->query($sqlup);
									//unset($_SESSION['sid']);
									 unset($_SESSION['id']);
									  unset($_SESSION['inseid']);
									 //unset($_SESSION['num_lots']);
                                 echo '<script>alert("updating")</script>';
                                 header("location:login.php");
                                 }
                                 else
                                    { echo '<script>alert("error_up")</script>';

                                echo"". $conn->error;

                                }

}

                                ?>