<!DOCTYPE html>
<html>
  <head>
    <title>HelthBiography !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assist/css/login-style.css'); ?>" rel="stylesheet"><!--CUSTOMIZE STYLE-->
    <link href="<?php echo base_url('assist/css/font-awesome.min.css'); ?>" rel="stylesheet"><!--FONT AWSOME-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section class="section-login-header">
      <h1><b id="one">H</b>el<b id="one">t</b>h <b id="one">B</b>io<b id="one">g</b>rap<b id="one">h</b>y <b style="color:gray;">!</b></h1>
    </section>
    <section class="section-portfolio container">
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-4 link-item">
    <a href="#" class="thumbnail one" data-toggle="modal" data-target="#myModalAdmin">
      <h4>
        <i class="fa fa-user-secret" aria-hidden="true"></i><br/>
        Admin Login !
      </h4>
    </a>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-4 link-item">
    <a href="" class="thumbnail two" data-toggle="modal" data-target="#myModalDoctor">
      <h4>
        <i class="fa fa-user-md" aria-hidden="true"></i><br/>
        Doctor Login !
      </h4>
    </a>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-4 link-item">
    <a href="#" class="thumbnail three" data-toggle="modal" data-target="#myModalPatient">
      <h4>
        <i class="fa fa-bed" aria-hidden="true"></i><br/>
        Patient Login !
      </h4>
    </a>
  </div>

  <center style="color:silver;">
    <?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==--><br/><br/>
    Powered By- DWIN'S IT
  </center>
</div>
    </section>


<!-- Modal Admin-->
<div class="modal fade" id="myModalAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="margin-top:100px;">
    <div class="modal-content" style="border-radius:0px; background: rgba(70,30,0,0.5);">

        <form role="form" action="<?php echo base_url('index.php/Adminlogin/LoginForm');?>" method="post">
            <div class="modal-header" style="background:rgb(27, 44, 45);">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color:white;">Admin Login !</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="color:white;">Username/Email</label>
                  <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter Username/Email" style="border-radius: 0px;">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" style="color:white;">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="border-radius: 0px;">
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" style="border-radius: 0px;">Login !</button>
            </div>
        </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal Doctor-->
<div class="modal fade" id="myModalDoctor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="margin-top:100px;">
    <div class="modal-content" style="border-radius:0px; background: rgba(70,30,0,0.5);">

        <form role="form" action="<?php echo base_url('index.php/Doctorlogin/LoginForm'); ?>" method="post">
            <div class="modal-header" style="background:rgb(27, 44, 45);">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color:white;">Doctor Login !</h4>
            </div>

            <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="color:white;">Username/Email</label>
                  <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter Username/Email" style="border-radius: 0px;">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" style="color:white;">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="border-radius: 0px;">
                </div>
            </div>
            <div class="modal-footer">
              <a href="<?php echo base_url('index.php/Register/RegisterDoctor'); ?>">Don't Have Account !</a> &nbsp; &nbsp; &nbsp;
              <button type="submit" class="btn btn-default" style="border-radius: 0px;">Login !</button>
            </div>
        </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal -->
<div class="modal fade" id="myModalPatient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="margin-top:100px;">
    <div class="modal-content" style="border-radius:0px; background: rgba(70,30,0,0.5);">

        <form role="form" action="<?php echo base_url('index.php/Userlogin/LoginForm'); ?>" method="post">
            <div class="modal-header" style="background:rgb(27, 44, 45);">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color:white;">Patient Login !</h4>
            </div>

            <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="color:white;">Username/Email</label>
                  <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter Username/Email" style="border-radius: 0px;">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" style="color:white;">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="border-radius: 0px;">
                </div>
            </div>
            <div class="modal-footer">
              <a href="<?php echo base_url('index.php/Register/RegisterPatient'); ?>">Don't Have Account !</a> &nbsp; &nbsp; &nbsp;
              <button type="submit" class="btn btn-default" style="border-radius: 0px;">Login !</button>
            </div>
        </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assist/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript">
        /* Set the width of the side navigation to 250px */
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <script>
      $(document).ready( function () {
          $('#mytableId').DataTable();
      } );
    </script>
  </body>
</html>