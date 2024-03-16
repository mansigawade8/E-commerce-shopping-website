<?php
require_once"dbconfig.php";

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href="css/responsive.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">
  <script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();
aler(query);       
           if(query != '')  
           {  
                $.ajax({  
                     url:"searchinput.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                          
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      }); 

$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });   
 });  
 </script>  
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

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <li>
    
  <div class="text-centre">
    <h4>SEARCH YOUR PRODUCT</h4>
  </div>
  </li>
  <div class="row h-100 align-items-center justify-content-center">
<form  class="form-inline" method="post" action="search_view.php"> 
<input type="text" class="form-control" name= "medname"  placeholder="Type here...">
  
<select class="form-control" name="category">
<option>Select</option>
<option value="HOMEOPATHY">HOMEOPATHY</option>
<option value="VITAMINSSUPPLEMENTS">VITAMINS & SUPPLEMENTS</option>
<option value="AYURVEDA">AYURVEDA</option>
<option value="HEALTHFOOdDRINKS">HEALTH FOOD & DRINKS</option>
<option value="HEALTHCAREDEVICES">HEALTHCARE DEVICES</option>
<option value="SKINCARE">SKIN CARE</option>
</select>
</select>     

  <button type="submit" name="onsearch" id="search_click" class="btn btn-success ">Search</button>
</form> 
</div>
</section>

<section class="my-15">
	<div>
		<h2 class="text-center">OUR MEDICINE COLLECTION</h2>
	</div>
</section>

<section>
  <h4 style="background-color:#362175;color:white;text-align:center">Homeopathy</h4>
                    
            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                      
           <?php
           $result=select("select * from items where category='HOMEOPATHY'");
           while($r=mysqli_fetch_array($result))
           {
             extract($r);
           ?>
                        <div class="single-features-area">
                            <a href="view_detail.php?id=<?=$elecid?>"><img src="admin/images/<?=$image?>" style="height:200px;width:400px; align-content">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="" style="height:150px">
                              
                                <div class="feature-title">
                 <p><?=$title?></p>
                               
                                   <h5><?=$price?>/-</h5></br>
                     </div>
                                
                <?php for($i=1;$i<=$elec_rating;$i++) :  ?>

                <i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                    
                            </div></a>
                        </div>
            <?php
           }
            ?>
                        
                        
                    </div>
                </div>
            </div></br></br>
        </section>
        <section>
      <h4 style="background-color:#362175;color:white;text-align:center">VITAMINS & SUPPLEMENTS</h4>
 
      <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
           <?php
           $result=select("select * from items where category='VITAMINSSUPPLEMENTS'");
           while($r=mysqli_fetch_array($result))
           {
             extract($r);
           ?>
                        <a href="view_detail.php?id=<?=$elecid?>"><div class="single-features-area">
                            <img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
                 <p><?=$title?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
                <?php for($i=1;$i<=$elec_rating;$i++) :  ?>

                <i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                     
                            </div>
                        </div></a>
            <?php
           }
            ?>
                        
                        
                    </div>
                </div>
            </div></br></br>
      <h4 style="background-color:#362175;color:white;text-align:center">AYURVEDA</h4>
 
      <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
           <?php
           $result=select("select * from items where category='AYURVEDA'");
           while($r=mysqli_fetch_array($result))
           {
             extract($r);
           ?>
                        <a href="view_detail.php?id=<?=$elecid?>"><div class="single-features-area">
                            <img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
                 <p><?=$title?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
                <?php for($i=1;$i<=$elec_rating;$i++) :  ?>

                <i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                     
                            </div>
                        </div></a>
            <?php
           }
            ?>
                        
                        
                    </div>
                </div>
            </div></br></br>
      <h4 style="background-color:#362175;color:white;text-align:center">HEALTH FOOD & DRINKS</h4>
 
      <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
           <?php
           $result=select("select * from items where category='HEALTHFOOdDRINKS'");
           while($r=mysqli_fetch_array($result))
           {
             extract($r);
           ?>
                        <a href="view_detail.php?id=<?=$elecid?>"><div class="single-features-area">
                            <img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
                 <p><?=$title?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
                <?php for($i=1;$i<=$elec_rating;$i++) :  ?>

                <i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                     
                            </div>
                        </div></a>
            <?php
           }
            ?>
                        
                        
                    </div>
                </div>
            </div></br></br>
      <h4 style="background-color:#362175;color:white;text-align:center">HEALTHCARE DEVICES</h4>
 
      <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
           <?php
           $result=select("select * from items where category='HEALTHCAREDEVICES'");
           while($r=mysqli_fetch_array($result))
           {
             extract($r);
           ?>
              <a href="view_detail.php?id=<?=$elecid?>"><div class="single-features-area">
                            <img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
                 <p><?=$title?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
                <?php for($i=1;$i<=$elec_rating;$i++) :  ?>

                <i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                     
                            </div>
                        </div></a>
            <?php
           }
            ?>
                        
                        
                    </div>
                </div>
            </div></br></br>
      <h4 style="background-color:#362175;color:white;text-align:center">SKINCARE</h4>
 
      <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
           <?php
           $result=select("select * from items where category='SKINCARE'");
           while($r=mysqli_fetch_array($result))
           {
             extract($r);
           ?>
                        <a href="view_detail.php?id=<?=$elecid?>"><div class="single-features-area">
                            <img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
                 <p><?=$title?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
                <?php for($i=1;$i<=$elec_rating;$i++) :  ?>

                <i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                     
                            </div>
                        </div></a>
            <?php
           }
            ?>
                        
                        
                    </div>
                </div>
            </div></br></br>
      
        </div>
</section>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
