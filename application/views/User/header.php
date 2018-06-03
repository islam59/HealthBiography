<!DOCTYPE html>
<html>
  <head>
    <title>HelthBiography !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assist/css/style.css'); ?>" rel="stylesheet"><!--CUSTOMIZE STYLE-->
    <link href="<?php echo base_url('assist/css/font-awesome.min.css'); ?>" rel="stylesheet"><!--FONT AWSOME-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div id="mySidenav" class="sidenav">
  <div class="user-profile">
    <img src="<?php echo base_url('assist/images/1.png'); ?>" style="width:50%; height:120px; margin:2% auto;" class="img-responsive">
    <h4><?php echo $this->session->userdata('username'); ?></h4>
    <p style="opacity: 0.5;">
      Loren ipsum dummy text Loren ipsum dummy text Loren ipsum dummy text Loren ipsum dummy text 
    </p>
  </div>
  <p class="borderone"></p>
  <p class="bordertwo"></p>
  <br/><br/>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="<?php echo base_url('index.php/User/'); ?>">Home</a>
  <a href="<?php echo base_url('index.php/Userlogin/Logout'); ?>">Logout</a>
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()" class="menu-icon">
<i class="fa fa-comments-o" aria-hidden="true"></i>
</span>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<section class="section-header container-fluid">
  <h1><b id="one">H</b>eal<b id="one">t</b>h <b id="one">B</b>io<b id="one">g</b>rap<b id="one">h</b>y <b style="color:gray;">!</b>
</section>

