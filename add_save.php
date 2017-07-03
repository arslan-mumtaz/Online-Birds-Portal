<?php 
include('dbconnect.php');
if (isset($_POST['submit'])){
$add_title=$_POST['add_title'];
$category_id=$_POST['category_id'];
$description=$_POST['add_description'];
$price=$_POST['price'];

$imageName= mysql_real_escape_string($_FILES['add_image']['name']); //SQL Injection defence!

//$imageName = =addslashes(file_get_contents($_FILES['p_image']['tmp_name']));
$tmp_name = $_FILES['add_image']['tmp_name'];
$filepath = "photo/".basename($imageName);

$country=$_POST['country'];
$city=$_POST['city'];
$city_area=$_POST['city_area'];
$address=$_POST['address'];
/* $date_receive=$_POST['date_receive']; */
/* $date_added=$_POST['date_added']; */


if(file_exists($tmp_name))
{
   echo "file uploaded to temp dir";
}
else
{
   echo "file upload failed";
   exit();
}

if(move_uploaded_file($tmp_name, $filepath))
{
   echo "upload complete";
}
else
{
   echo "move_uploaded_file failed";
   exit();
}


								
mysql_query("insert into new_adds ( id , add_title , category_id , description , price , pic , country , city , city_area , time )
 values('' , '$add_title', '$category_id', '$description', '$price', '$imageName', '$country', '$city', '$city_area', NOW())")or die(mysql_error());
 
header('location:home.php');
}
?>	