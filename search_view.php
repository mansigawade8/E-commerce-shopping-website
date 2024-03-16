<?php require_once"dbconfig.php";

if(isset($_REQUEST['onsearch']))
{
	extract($_REQUEST);
	$result=select("SELECT * FROM `items` where Title like '%$medname%' and category='$category'");
}
?>
<!DOCTYPE html>
<html lang="en">

<head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1 >Medicart</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
         </li>

         <li><a class="nav-link" href="mycart.php">My Cart</a></li>
        
         <li><a class="nav-link" href="registration.php">Sign-in or Register</a></li>
      
      
</nav>

  

    
	</br>
    
	 <div class="row">
                <div class="col-lg-12 " >
                  
                   <div class="row" style="margin-left:20px">
                   
					 <?php
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
					 <div class="col-lg-3 ">
     
                            <a href="view_detail.php?id=<?=$elecid?>"><div style="width:200px;" class="border well well-sm"><img src="admin/images/<?=$image?>" style="height:200px;width:200px">
                            <!-- Price -->
                            
                                <div class="feature-title">
								 <h6 style="background-color:pink"><?=$title?></h6>
                               
                                   <h5><?=$price?>/-</h5>
								   
								     </div>
                                
								
                               </div>     
                           </a></div>
                       
						<?php
					 }
						?>
                        </div>
                        
                    </div>
                </div></br>
            
	
	

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>