<?php
session_start();
include 'database.php';
$iddd=$_GET['id'];

			  $query="SELECT *  FROM dailybook  WHERE did=$iddd ";
			$result = mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0)
			{
				
						?>



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
	<!-- showhide script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
$(document).ready(function(){
    $('#show').click(function() {
      $('.menu').toggle("slide");
    });
});
</script>

</head>

<body>
	
	<section class="forms">
        <div class="container">
            <!-- logo -->
            <div class="logo">
                <a class="brand-logo" href="index.html">ADMIN </a>
            </div>
            <!-- //logo -->
            <div class="forms-grid">

                <!-- login -->
                <div class="login">
                    
                    <strong>Corona Report</strong>

                    
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    
                                    
                                </div>
                                <?php
				while($row = mysqli_fetch_array($result))
				{
							?>
								
                                <div class="form-row bottom">
                                    
                                         
									
                                        
									<img src="../uploads/<?php  echo $row['report'];		?>" width="100%">
                               
                                <div class="form-row button-login">
                                 
									
                                </div>
								 
								</div>
								<?php

								
				}
 }	
?>
                                </div>
                                
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