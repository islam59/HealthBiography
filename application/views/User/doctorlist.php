<section class="main-content container">
  <div class="content-home">

<form class="form-inline" role="form" style="margin-top:3%;" action="<?php echo base_url('index.php/User/DoctorSearch'); ?>" method="post">
    <div class="input-group">
      <span class="input-group-addon"  style="border-radius: 0px; background:orange; font-weight: bold; border-color:orange;">Search</span>
      <input type="text" name="search" class="form-control"  style="border-radius: 0px; background: rgba(0,0,0,0.3); border-color:orange;" placeholder="Enter Search Key for Doctor !">
      <span class="input-group-addon"  style="border-radius: 0px; background:orange; border-color:orange;">
        <button type="submit" style="margin:0; padding:0; background: none; border:0px;"><i class="fa fa-search" aria-hidden="true"></i></button>
      </span>
    </div>
</form>
<?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==--><br/>
<?php 
  foreach ($doctors as $doctor) {
?>
    <div class="col-sm-12 col-md-12 col-lg-12" style="border:1px solid orange; padding:1%; text-align: justify; margin-top:1%;">
        <div class="col-sm-12 col-md-3 col-lg-3">
          <img src="<?php echo base_url(); ?>assist/images/1.png" class="img-responsive" style="width:90%; height:150px;">
        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
          <h4><?php echo strtoupper('DR. '.$doctor->firstname.' '.$doctor->lastname); ?>&nbsp; 
            <a href=""><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>

            <small>
              <br/><?php echo $doctor->department; ?> | 
                  <?php echo $doctor->gender; ?> |
                   <?php echo $doctor->country; ?>
            </small>
              </h4>
          <p>
            <?php echo $doctor->education; ?>
            <br/>
            <?php echo $doctor->work; ?><br/>
            <?php echo $doctor->consultingphone; ?> | <?php echo $doctor->email; ?>
          </p>
          <a href="" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#myModalApply<?php echo $doctor->userid; ?>">
            <i class="fa fa-commenting-o" aria-hidden="true"></i> Apply !
          </a> 

        </div>
    </div>

<!-- Modal Admin-->
<div class="modal fade" id="myModalApply<?php echo $doctor->userid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="margin-top:50px;">
    <div class="modal-content" style="border-radius:0px; background: rgba(70,30,0,0.5);">

        <form role="form" action="<?php echo base_url('index.php/User/ApplyForm');?>" method="post" style="text-align: left;">
            <div class="modal-header" style="background:rgb(27, 44, 45);">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color:white;">Applying for Consulting !</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="color:white;">
                    <input type="hidden" name="userid" value="<?php echo $this->session->userdata('userid'); ?>">
                    <input type="hidden" name="doctorid" value="<?php echo $doctor->userid; ?>">
                  </label>
                </div>
                <div class="form-group">
                    <?php 
                        $doc = $doctor->userid; 
                        $getconsultingdata = $this->consulting_model->getAllConsultingDataById($doc); 
                        foreach ($getconsultingdata as $loc) {
                    ?>
                        <div class="radio">
                          <label>
                            <input type="radio" name="locationid" value="<?php echo $loc->lid; ?>">
                            <?php echo 'Date# '.$loc->consultingdate.' || Location# '.$loc->address; echo '<br/>'; ?>
                          </label>
                        </div>
                    <?php }//end of foreach..  ?>  

                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" style="border-radius: 0px;">Apply To !</button>
            </div>
        </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php 
  }
?>





  </div>
</section>