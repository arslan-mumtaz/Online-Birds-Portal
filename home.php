

<?php

include 'header.php';
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="http://yourjavascript.com/21051171187/jquery-touchswipe-min.js"></script>
<script type="text/javascript" src="http://yourjavascript.com/11873115711/jquery-1-12-4-min.js"></script>
<script type="text/javascript" src="http://yourjavascript.com/71712155041/responsive-bootstrap-carousel.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_contact.css">


<body>
<!--header start here-->
 
 <div class="banner">
  <div class="container">
     <div class="banner-bottom">
           
               
                 <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider4">
              <li>
                        <div class="col-md-4 banner-left">
                       <h3>Birds for Sale  <span class="bann-sli-text">  </span> <span class="bann-sli-text">Buy and Sell online</span></h3>
                        </div>
                         <div class="col-md-8 banner-right">
                            <img  class="img-responsive" src="img/slide1.jpg" alt="">
                          </div>
                         <div class="clearfix"> </div>
                 </li>
               <li>
                        <div class="col-md-4 banner-left">
                      <h3>Find <span class="bann-sli-text"> any type of </span> <span class="bann-sli-text">Birds</span></h3>
                        </div>
                         <div class="col-md-8 banner-right">
                            <img  class="img-responsive" src="img/slide2.jpg" alt="">
                          </div>
                         <div class="clearfix"> </div>
                 </li>
                  <li>
                        <div class="col-md-4 banner-left">
                      <h3>Sell any <span class="bann-sli-text"> type of </span> <span class="bann-sli-text">Birds</span></h3>
                        </div>
                         <div class="col-md-8 banner-right">
                            <img  class="img-responsive" src="img/slide3.jpg" alt="">
                          </div>
                         <div class="clearfix"> </div>
                 </li>
                 </ul>
           </div>
     </div>
     <span class="mover"> </span>
  </div>
</div>
<!--header end here-->
<!--- banner Slider starts Here --->
          <script src="js/responsiveslides.min.js"></script>
       <script>
          // You can also use "$(window).load(function() {"
          $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
              auto: true,
              pager: true,              
              speed: 500,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
              }
            });
      
          });
        </script>
      <!----//End-slider-script---->

<!--banner-strip start here-->

<div class="container">
   <div class="row">
   <h3>Latest Adds</h3>
      <div id="adv_team_4_columns_carousel" class="carousel slide four_shows_one_move team_columns_carousel_wrapper" data-ride="carousel" data-interval="2000" data-pause="hover">
         <!--========= Wrapper for slides =========-->
         <div class="carousel-inner" role="listbox">
            <!--========= 1st slide =========-->
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <img src="http://placehold.it/150x150" alt="slider 01">
                  <div class="team_columns_item_caption">
                     <h4>Islamabad</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <img src="http://placehold.it/150x150" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Islamabad</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <img src="http://placehold.it/150x150" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Islamabad</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <img src="http://placehold.it/150x150" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Lahore</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
            </div>
            <!--========= 2nd slide =========-->
            <div class="item active">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <img src="http://placehold.it/150x150" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Islamabad</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <img src="http://placehold.it/150x150" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Islamabad</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <img src="http://placehold.it/150x150" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Rawalpindi</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <img src="http://placehold.it/150x150" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Rawalpindi</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
            </div>
            <!--========= 3rd slide =========-->
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <img src="http://placehold.it/150x150" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Rawalpindi</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <img src="http://placehold.it/150x150" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Rawalpindi</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <img src="http://placehold.it/150x150" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Karachi</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <img src="http://placehold.it/150x150" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Lahore</h4>
                     <hr>
                     <h5>PAKISTAN</h5>
                  </div>
               </div>
            </div>
            
         <!--======= Navigation Buttons =========-->
         <!--======= Left Button =========-->
         <a class="left carousel-control team_columns_carousel_control_left adv_left" href="#adv_team_4_columns_carousel" role="button" data-slide="prev">
         <span class="fa fa-angle-left team_columns_carousel_control_icons" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <!--======= Right Button =========-->
         <a class="right carousel-control team_columns_carousel_control_right adv_right" href="#adv_team_4_columns_carousel" role="button" data-slide="next">
         <span class="fa fa-angle-right team_columns_carousel_control_icons" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
   </div>
</div>
<div class="bann-strip">
  <div class="container">
    <h3>Select Categories</h3>
    <div class="bann-strip-main">
        <div class="col-md-3 bann-grid">
           <a href="single.html"><img src="img/slide1.jpg" alt="" class="img-responsive"></a>
           <div class="details">
            <h4><a href="single.html">Parrots</a></h4>
            <p>centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a class="bannn-btn" href="single.html">See Birds</a>
           </div>
        </div>
        <div class="col-md-3 bann-grid">
            <a href="single.html"><img src="img/slide2.jpg" alt="" class="img-responsive"></a>
           <div class="details">
            <h4><a href="single.html">Parakeets</a></h4>
            <p>centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a class="bannn-btn" href="single.html">See Birds</a>
           </div>
        </div>
        <div class="col-md-3 bann-grid">
           <a href="single.html"> <img src="img/slide3.jpg" alt="" class="img-responsive"></a>
           <div class="details">
            <h4><a href="single.html">Finches</a></h4>
            <p>centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a class="bannn-btn" href="single.html">See Birds</a>
           </div>
        </div>
        <div class="col-md-3 bann-grid">
            <a href="single.html"><img src="img/slide1.jpg" alt="" class="img-responsive"></a>
           <div class="details">
            <h4><a href="single.html">Pigeons</a></h4>
            <p>centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a class="bannn-btn" href="single.html">See Birds</a>
           </div>
        </div>

        <div class="col-md-3 bann-grid">
            <a href="single.html"><img src="img/slide1.jpg" alt="" class="img-responsive"></a>
           <div class="details">
            <h4><a href="single.html">Birds of Pray</a></h4>
            <p>centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a class="bannn-btn" href="single.html">See Birds</a>
           </div>
        </div>

        <div class="col-md-3 bann-grid">
            <a href="single.html"><img src="img/slide1.jpg" alt="" class="img-responsive"></a>
           <div class="details">
            <h4><a href="single.html">Other Birds</a></h4>
            <p>centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a class="bannn-btn" href="single.html">See Birds</a>
           </div>
        </div>

        <div class="col-md-3 bann-grid">
            <a href="single.html"><img src="img/slide1.jpg" alt="" class="img-responsive"></a>
           <div class="details">
            <h4><a href="single.html">Birds Accessories</a></h4>
            <p>centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a class="bannn-btn" href="single.html">See Accessories</a>
           </div>
        </div>

        <div class="col-md-3 bann-grid">
            <a href="single.html"><img src="img/slide1.jpg" alt="" class="img-responsive"></a>
           <div class="details">
            <h4><a href="single.html">See All Categories</a></h4>
            <p>centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a class="bannn-btn" href="single.html">Show all</a>
           </div>
        </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>


<?php
if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}

include 'footer.php';
?>