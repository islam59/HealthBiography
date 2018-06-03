<section class="main-content container">
  <div class="content-home">

<form class="form-inline" role="form" style="margin-top:3%;" action="<?php echo base_url('index.php/Admin/UserSearch'); ?>" method="post">
    <div class="input-group">
      <span class="input-group-addon"  style="border-radius: 0px; background:orange; font-weight: bold; border-color:orange;">Search</span>
      <input type="text" name="search" class="form-control"  style="border-radius: 0px; background: rgba(0,0,0,0.3); border-color:orange;" placeholder="Enter Search Key for Doctor !">
      <span class="input-group-addon"  style="border-radius: 0px; background:orange; border-color:orange;">
        <button type="submit" style="margin:0; padding:0; background: none; border:0px;"><i class="fa fa-search" aria-hidden="true"></i></button>
      </span>
    </div>
</form>


<?php 
  foreach ($users as $user) {
?>
    <div class="col-sm-12 col-md-12 col-lg-12" style="border:1px solid orange; text-align: justify; margin-top:1%;">
      <div class="jumbotron" style="margin:0px; padding:0px; background: none;">
        <h4><?php echo strToUpper($user->firstname.' '.$user->lastname); ?>
        </h4>
        <p style="font-size:12px;">
          Username # <?php echo $user->username; ?><br/>
          Email # <?php echo $user->email; ?><br/>
          Gender # <?php echo $user->gender; ?> <br/>
          Phone # <?php echo $user->phone; ?> <br/>
          Address # <?php echo $user->address; ?>
        </p>
        <p>
            <div class="btn-group" data-toggle="buttons">
<?php if($user->access == 1){ ?>
              <label class="btn btn-primary btn-sm">
                <a href="" type="checkbox" style="color:white;"> ON</a>
              </label>
              <label class="btn btn-default btn-sm">
                <a href="<?php echo base_url('index.php/Admin/AccessOffUser/'); ?><?php echo $user->userid; ?>" type="checkbox" style="color:black;"> OFF</a>
              </label>
<?php }else{ ?>
              <label class="btn btn-default btn-sm">
                <a href="<?php echo base_url('index.php/Admin/AccessOnUser/'); ?><?php echo $user->userid; ?>" type="checkbox" style="color:black;"> ON</a>
              </label>
              <label class="btn btn-primary btn-sm">
                <a type="checkbox" style="color:white;"> OFF</a>
              </label>
<?php } ?>
            </div> 

          <a href="<?php echo base_url('index.php/Admin/RemoveUser/'); ?><?php echo $user->userid; ?>" class="btn btn-danger btn-sm pull-left" role="button">Remove !</a> 
          </p>
      </div>
    </div>

<?php 
  }
?>


        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12" style="padding-top: 2%; padding-bottom: 2%;">
          <center style="color:silver;">Powered By- DWIN'S IT</center>
        </div>
  </div>
</section>