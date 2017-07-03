<?php include 'header.php';?>

<?php include 'sidebar.php';?>

<link rel="stylesheet" type="text/css" href="css/style_contact.css">
<link href="css/style.css" rel="stylesheet"/>

<body>
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
  <tr>  
<!--here showing results in the table -->  
     <div class="container">
  <div class="row">
        <div class="col-md-12">
            <div class='col-md-12 card bordered'>
                
                <div class="col-md-4 float-left">
                    <img src="photo/<?php echo $pic ?>" id="profile-image1" 
                                 class="img-responsive"  style= "height: 200px ; width: 250px"/>
                </div>
                <div class="col-md-8">
                    <h4>Product Title : <?php echo $add_title ?> </h4>
                    <P>Description : <?php echo $description ?></P>
                    
                    <div class="row bottom">
                        <div class="col-md-6 left">
                            <h4>Rs. <?php echo $price ?>.00 <span class="fa fa-money"></span></h4>
                            <h4><span>Posted at : <i class="glyphicon glyphicon-calendar"></i> <?php echo $time ?> </span></h4>
                            <h5>City : <i class="glyphicon glyphicon-globe"></i>  <?php echo $city ?></h5>
                            <p>Location : <i class="fa fa-location-arrow"></i>  <?php echo $city_area ?></p>
                        </div>
                        <div class="col-md-6 right ">
                            <button class="btn btn-success"> <i class="fa fa-address-book" aria-hidden="true"></i> Contact Buyer</button>
                        </div>
                        <div class="col-md-6 right">
                          <button class="btn btn-success"> <i class="fa fa-eye" aria-hidden="true"></i> View Details</button>
                        </div>

                        <div class="col-md-6 right">
                           <button class="btn btn-default"><span class="glyphicon glyphicon-heart-empty"></span>Like</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
  </div>
</div>

           <!--  <a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td>btn btn-danger is a bootstrap button to show danger-->
        
          <?php } ?>  





</body>

<?php
if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}

include 'footer.php';
?>