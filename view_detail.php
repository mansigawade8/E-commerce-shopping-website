<?php
require_once"dbconfig.php";
$result=select("select * from items where elecid='".$_REQUEST['id']."'")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1 >Medikart</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
         </li>

         <?php
                 if(isset($_SESSION['login']))
                 {
                   ?> 
         </li>

         <li><a class="nav-link" href="mycart.php">My Cart</a></li>
        
                              
                                  <a class="nav-link" href="logout.php">Logout</a>
                   
                   <?php
                 }
                   else
                   {
                     ?>
                     <a class="nav-link" href="registration.php">Sign in  or Register</a>
                
                              
                   <?php
                   }
                 
                 ?>
                                
      
</nav>

    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)"></div>
	</br>
    <div class="row">
        <div class="col-lg-1 text-center"></div>
        <div class="col-lg-10 text-center">
		
          <div class="alert alert-info" role="alert">
  <p style="color:red;font-weight:bold;font-size:20px;">Complete Detail<p>
</div>
        </div>
		 <div class="col-lg-1 text-center"></div>
       
	   
	   
      </div><?php
	  while($r=mysqli_fetch_array($result))
	  {
		  extract($r);
	  ?>
	  <div class="row">
	  <div class="col-lg-1"></div>
	  <div class="col-lg-10">
<div class="card text-center">
  <div class="card-header" style="font-weight:bold;font-size:20px">
    <?=ucwords($title)?>
  </div>
  <ul class="list-group list-group-flush">
        <li class="list-group-item">Price-  <?=$price?>  /-</li>
  </ul>
  
  <div class="card-body">
  <img src="admin/images/<?=$image?>" style="height:400px;max-width:95%;border:6px double #545565;">
    <h5 class="card-title"><?=ucwords($description)?></h5>
	<form method="post">
	<?php
	if(isset($_SESSION['login']))
{
?>	    <button name="cart" class="btn btn-primary">Add To Cart</button>
</div>
  <input type="hidden" name="bookid" value=<?=$elecid?>>
  <input type="hidden" name="userid" value=<?=$_SESSION['userid']?>>
  <div class="card-footer text-muted">
 
 <?php
}
else
{
?><a href="registration.php" class="btn btn-primary">Add To Cart</a>
	   
<?php	
}
?>
       <a href="index.php" class="btn btn-primary">Continue shopping</a>
     
  </div>
  </form>
  <?php
	  
	  if(isset($_REQUEST['cart']))
	  {
		 extract($_REQUEST);
		$query= "INSERT INTO `cart`( `elecid`, `userid`) VALUES ('$bookid','$userid')";
		$n=iud($query);
	 if($n==1)
	{
		echo"<script>alert(' Successfull');
		 </script>";
	}
	else
	{
	echo"<script>alert('Something Wrong');
		 
		 </script>";
	
	}
	}
	  
	  ?>
</div>	  
	  
	  </div></div><?php
	  }
	  ?>
	<footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                  
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

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