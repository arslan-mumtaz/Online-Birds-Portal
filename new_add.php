<?php include 'header.php'; ?>


<?php

     mysql_select_db('birds',mysql_connect('localhost','root',''))or die(mysql_error());

?>

<body>

<div class="container"> 
<form class="form-horizontal" method="post" action="add_save.php" enctype="multipart/form-data">
      
  
    <h3>Post Your Add :</h3>

    <br>

    <label>General Infromation</label>  
        

    
      <div class="control-group">
      <div class="row">
      <div class="col-sm-2 col-sm-offset-1">
      <label class="control-label" for="inputCategory">Category</label>
      </div>
      <div class="col-sm-4">
      <div class="controls">
      <select name="category_id" class="cat">
      <option></option>
      <?php
      $cat_query = mysql_query("select * from categories");
      while($cat_row = mysql_fetch_array($cat_query)){
      ?>
      <option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['category']; ?></option>
      <?php  } ?>


      </select>
    </div>
    </div>
    </div>
    
    <div class="control-group">
    <div class="row">
    <div class="col-sm-2 col-sm-offset-1">
      <label class="control-label" for="inputEmail">Title:</label>
      </div>

      <div class="col-sm-4">
      <input type="text"  class="span4 cat" id="inputTitle" name="add_title"  placeholder="Title" required>
      </div>
    </div>
    </div>
    

    
    

    <div class="control-group">
    <div class="row">
    <div class="col-sm-2 col-sm-offset-1">
      <label class="control-label" for="inputDescription">Description:</label>
      </div>
      <div class="col-sm-4">
      <input type="text" class="span1 cat" id="inputDescription" name="add_description"  placeholder="" required>
      </div>
    </div>
    </div>
    
    <div class="control-group">
     <div class="row">
    <div class="col-sm-2 col-sm-offset-1">
      <label class="control-label" for="inputPrice">Price:</label>
      </div>
      <div class="col-sm-4">
      <input type="text"  class="span4 cat" id="inputPrice" name="price"  placeholder="price" required>
      </div>
    </div>
    </div>
    <div class="control-group">
    <div class="row add-image">
    <div class="col-sm-2 col-sm-offset-1">
       <label class="control-label">Add Photo <br>
         <small>(Required)</small></label>
         </div>
          <div class="col-sm-4">
            <div class="input-group"> <span class="input-group-addon" id="file_upload"><i class="glyphicon glyphicon-upload"></i></span>
               <input type="file" name="add_image" class="form-control upload" aria-describedby="file_upload">
            </div>
          </div>
    </div>
    </div>


    <div class="container">

        <h3>Location of Seller</h3>

        <div class="control-group">
        <div class="row">
        <div class="col-sm-2 col-sm-offset-1">
          <label class="control-label" for="inputPassword">Country :</label>
          </div>
          <div class="col-sm-4">
          <input type="text"  class="span4 cat"  id="inputCountry" name="country" value="Pakistan" disabled="disabled"  placeholder="Country" required>
          </div>
        </div>
        </div>


        <div class="control-group">
        <div class="row">
        <div class="col-sm-2 col-sm-offset-1"
          <label class="control-label" for="inputPassword">City :</label>
          </div>
          <div class="col-sm-4">
          <select name="city" class="cat" required>
            <option>Select a City</option>
            <option value="isb">Islamabad</option>
            <option value="rwp">Rawalpindi</option>
            <option value="lhr">Lahore</option>
          </select>
          </div>
        </div>
        </div>

        <div class="control-group">
        <div class="row">
        <div class="col-sm-2 col-sm-offset-1">
          <label class="control-label" for="inputPassword">City Area :</label>
          </div>
          <div class="col-sm-4">
          <input type="text" id="inputPassword" class="cat" name="city_area cat"  placeholder="City Area" required>
          </div>
        </div>
        </div>


        <div class="control-group">
        <div class="row">
        <div class="col-sm-2 col-sm-offset-1">
          <label class="control-label" for="inputPassword">Address :</label>
          </div>
          <div class="col-sm-4">
          <input type="text"  class="span4 cat" id="inputPassword" name="address"  placeholder="Address" required>
          </div>
        </div>
        </div>

        
    </div>
    
    
    <div class="control-group">
      <div class="controls">
      <button name="submit" type="submit" class="btn btn-success" style="    margin-left: 376px;
    margin-top: 39px;"><i class="icon-save icon-large"></i>&nbsp;Save</button>
      </div>
    </div>
    </form> 
  </div>


  <div class="bann-strip">
  <div class="container">
   
      <div class="clearfix">  Hello </div>
    </div>
  </div>
</div>



</body>



<?php
if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}

include 'footer.php';
?>