<?php
require_once"dbconfig.php";
if(isset($_SESSION['login']))
{
	
}
else
{
	header("location:registration.php");
}

$result=select("SELECT *
FROM cart
INNER JOIN items ON cart.elecid = items.elecid WHERE userid='".$_SESSION['userid']."'");
$result1=select("SELECT sum(price)
FROM cart
INNER JOIN items ON cart.elecid = items.elecid WHERE userid='".$_SESSION['userid']."'");
$result2=select("select * from user where userid='".$_SESSION['userid']."'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">

</head>

<body>
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

         <li><a class="nav-link" href="mycart.php">My Cart</a></li>
        
         <li><a class="nav-link" href="registration.php">logout</a></li>
      
      
</nav>
   

    <!-- ***** Breadcumb Area Start ***** -->

	</br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1 text-center"></div>
        <div class="col-lg-10 text-center">
		
          <div class="alert alert-light" role="alert">
  <p style="color:red;font-weight:bold;font-size:20px; text-align: center;">My Cart Details<p>
</div>
        </div>
		 <div class="col-lg-1 text-center"></div>
       
	   
	   
      </div>
	  <div class="row">
	  <div class="col-lg-1"></div>
	  <div class="col-lg-10">
<div class="card text-center">
  
  <table class="table">
  <tr style="font-weight:bold">
<td>
S.No.
</td>
<td>image
</td>
<td>
Medicine name
</td>
<td>
Price
</td>
<td>
Remove
</td>
  </tr>
  <?php
  $n=1;
  while($p=mysqli_fetch_array($result))
  {extract($p); 
  ?>
  <tr>
  <td><?=$n?>.</td>
  <td><img src="admin/images/<?=$image?>" style="height:80px"></td>
  <td><?=ucwords($title)?></td>
  <td><?=$price?>  /-</td>
  <td><a href="index.php?dele=yes&id=<?=$cartid?>">
          <span class="btn btn-danger">X</span>
        </a></td>
  <?php
	 $n++;
	 }
  ?>
  </tr>
</table>
  <div class="card-footer text-muted">
  <?php
  while($t=mysqli_fetch_array($result1))
  {extract($t);
  ?>
     <a href="index.php" class="btn btn-danger" style="font-weight:bold">Total Price- <?=$t[0]?>  /-</a>
	 
          <a href="payment.php?price=<?=$t[0]?>"><span class="btn btn-success">Buy</span></a>
     	 <?php
  }
	 ?>
  </div>
  <div class="card-footer text-muted">
     <a href="index.php" class="btn btn-primary">Continue shopping</a>
  </div>
</div>	  
	  
	  </div></div>


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