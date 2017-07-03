<?php include 'header.php';?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
       
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Landing Page</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet"/>
        <link href="assets/css/mongo.css" rel="stylesheet"/>


        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    </head>
    <body class="landing-page landing-page1 service">
     

<div class="container-fluid">
<div class="row">
<div class="col-sm-3 cat-col">
<h4>Categories</h4>
 <div class="tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#cat1" data-toggle="tab"><span class="glyphicon glyphicon-heart"></span>Parrots</a></li>
          <li><a href="#cat2" data-toggle="tab"><span class="glyphicon glyphicon-star"></span>Parakeets</a></li>
          <li><a href="#cat1" data-toggle="tab"><span class="glyphicon glyphicon-headphones"></span>Finches</a></li>
          <li><a href="#cat2" data-toggle="tab"><span class="glyphicon glyphicon-time"></span>Poultry</a></li>
          <li><a href="#cat1" data-toggle="tab"><span class="glyphicon glyphicon-calendar"></span>Pigeons</a></li>
          <li><a href="#cat2" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>Birds of Prey</a></li>
          <li><a href="#cat2" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>Birds Accessories</a></li>
          <li><a href="#cat2" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>Other Birds</a></li>
        </ul>
        </div>


</div>




<div class="col-sm-9 services">
<div class="subscribe-right pull-right">
              
                <form action="#" method="post"> 
                    <input type="search" name="search" placeholder="Search..." required="">
                    <input type="submit" value="Search">
                    <div class="clearfix"> </div> 
                </form>  
                
            </div><div class="row">
<div class="col-sm-8 col-center">

<div class="tab-content">
<div class="tab-pane active fade in" id="cat1">



<?php 
  include('dbconnect.php');

  $view_adds_query = " SELECT * FROM new_adds "  ;
  $run = mysqli_query($link,$view_adds_query);//here run the sql query.


   while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $add_id=$row[0];  
            $add_title = $row[1];
            $category_id = $row[2];
            $description = $row[3];
            $price = $row[4];
            $pic = $row[5];
            $country =$row[6];
            $city = $row[7];
            $city_area = $row[8];
            $time = $row[9];
?>

<div class="row services-li">

<div class="col-sm-3">
<img src="photo/<?php echo $pic ?>" class="img-responsive">
</div>



<div class="col-sm-6">

<h3>  <?php echo "$add_title"; ?></h3>
<p> <?php echo "$description"; ?></p>
</div>
<div class="col-sm-3">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<br>
<i class="fa fa-eur" aria-hidden="true"> <?php echo "$price"; ?></i>
<br>
<i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="label"> <?php echo "$city"; ?></span>
<button class="btn btn-success">Contact Seller</button>

</div>

</div>

</div>

 </div>

 <?php } ?>  








<div class="col-sm-4 service-sidebar text-center">
<li>
<h4>Post a Job</h4>
<p>Post Project
If you do not find your exact requirement
</p>
<i class="pe-7s-display1"></i>
<button class="btn btn-info">Post a Job</button>

</li>
<li>
<h4>Secure</h4>
<p>100% secure job is done or mony back
</p>
<i class="pe-7s-lock" aria-hidden="true"></i>


</li>
<li>
<h4>Our Services</h4>
<p>100% secure job is done or mony back
</p>
<i class="pe-7s-star" aria-hidden="true"></i>


</li>




</div>



</div>




</div>
    


</div>
</div>


 

            <div class=" container-fluid copyright">
            <p>
                        &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">service portal</a>, better service
                    </p>
                      
           <!-- <section id="btn">
        <p>347k fans</p>
        <div id="facebook">
            
            <div class="fb"><div class="recto"></div></div>
            <div class="top"></div>
            <div class="fb verso"></div>
        </div>
        <div id="shadow"><img src="images/shadow.png" alt="shadow" /></div>
    </section> -->


                    </div>
               








        </body>
        <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/awesome-landing-page.js" type="text/javascript"></script>


    
</html>