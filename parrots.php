<?php include 'header.php';?>

<?php include 'sidebar.php';?>

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
                    <div class="col-md-10 ">

                        <div class="panel panel-default">
                            <div class="panel-heading">  <h4 >Add Details</h4></div>
                             <div class="panel-body">
      
                                <div class="col-sm-6">
                                 <div  align="center"> <img alt="User Pic" src="photo/<?php echo $pic ?>" id="profile-image1" 
                                 class="img-circle img-responsive"> 
                                <input id="profile-image-upload" class="hidden" type="file">
                                <div style="color:#8898;" >Thanks for Selecting Us</div>
                                <!--Upload Image Js And Css-->
                                 </div>
                                <br>
                          <!-- /input-group -->
                              </div>
            
                      <h4 style="color:#00b1b1;"><?php echo $add_title ?> </h4></span>
                        <span><p><?php echo $city ?></p></span>            
                      </div>
                      <div class="clearfix"></div>
                      <hr style="margin:5px 0 5px 0;">
              
                        
                <div class="col-sm-5 col-xs-6 tital " >Title:</div><div class="col-sm-7 col-xs-6 "><?php echo $add_title ?></div>
                     <div class="clearfix"></div>
                <div class="bot-border"></div>

                <div class="col-sm-5 col-xs-6 tital " >Add Description:</div><div class="col-sm-7"> <?php echo $description ?></div>
                  <div class="clearfix"></div>
                <div class="bot-border"></div>

                <div class="col-sm-5 col-xs-6 tital " >City/Town or District:</div><div class="col-sm-7"><?php echo $city ?></div>

                  <div class="clearfix"></div>
                <div class="bot-border"></div>

                <div class="col-sm-5 col-xs-6 tital " >Near By Area:</div><div class="col-sm-7"> <?php echo $city_area ?></div>

                  <div class="clearfix"></div>
                <div class="bot-border"></div>
                
                <div class="col-sm-5 col-xs-6 tital " >Country:</div><div class="col-sm-7"> <?php echo $country ?></div>

                <div class="clearfix"></div>
                <div class="bot-border"></div>
                
                <div class="col-sm-5 col-xs-6 tital " >Price :</div><div class="col-sm-7"> <?php echo $price ?></div>

                 <div class="clearfix"></div>
                <div class="bot-border"></div>

                <!-- <div class="col-sm-5 col-xs-6 tital " >Additional Information:</div><div class="col-sm-7"><?php echo $age ?></div>

                 <div class="clearfix"></div>
                <div class="bot-border"></div> -->

                <div class="col-sm-5 col-xs-6 tital " >Posted at :</div><div class="col-sm-7"><?php echo $time ?> </div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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