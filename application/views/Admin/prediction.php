    <section class="section-portfolio container">
      <div class="row">

<style type="text/css">
  label{ color:white; }
  .form-control{ border-radius: 0px;  }
</style>
<?php 
  if(isset($predictionsedit)){
?>
<div class="form form-responsive">
  <h4 style="color:white; margin-top:3%; text-align:center; ">Update Prediction Key</h4><hr/>
   <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('index.php/Admin/PredictionUpdateForm'); ?>">
    <input type="hidden" name="id" value="<?php echo $predictionsedit->id; ?>">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Symptom</label>
      <div class="col-sm-10">
        <textarea name="symptom" class="form-control" rows="2" placeholder="Enter Disses Symptom !">
          <?php echo $predictionsedit->symptom; ?>
        </textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Suggestion</label>
      <div class="col-sm-10">
       <textarea name="suggestion" class="form-control" rows="3" placeholder="Enter Disses Suggestions !">
         <?php echo $predictionsedit->suggestion; ?>
       </textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Refference Key</label>
      <div class="col-sm-10">
        <textarea name="refference" class="form-control" rows="2" placeholder="Enter Refferences !">
          <?php echo $predictionsedit->refference; ?>
        </textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Update Prediciton Key</button>
        <?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==-->
      </div>
    </div>
  </form>  
</div>
<?php 
  }else{
?>
<div class="form form-responsive">
  <h4 style="color:white; margin-top:3%; text-align:center; ">Add Prediction Key</h4><hr/>
   <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('index.php/Admin/PredictionForm'); ?>">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Symptom</label>
      <div class="col-sm-10">
        <textarea name="symptom" class="form-control" rows="2" placeholder="Enter Disses Symptom !"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Suggestion</label>
      <div class="col-sm-10">
       <textarea name="suggestion" class="form-control" rows="3" placeholder="Enter Disses Suggestions !"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Doctor Refference Key</label>
      <div class="col-sm-10">
        <textarea name="refference" class="form-control" rows="2" placeholder="Enter Refferences !"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add New Prediciton Key</button>
        <?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==-->
      </div>
    </div>
  </form>  
</div>
<?php 
  }
?>


<div class="" style="padding-top:3%;">

<?php 
  foreach ($predictions as $prediction) {
?>
    <div class="col-sm-12 col-md-4 col-lg-4 clearfix" style="  ">
      <div class="jumbotron" style="background: none;  padding:10%; margin-bottom: 0px; background: rgba(250,250,250,0.5); border-radius: 0px; margin-top:1%;">
        <h5>Symptom# <?php echo strToUpper($prediction->symptom); ?></h5>
        <p style="font-size:12px;">
          Suggestions # <?php echo $prediction->suggestion; ?>
        </p>
        <p style="font-size:12px;">
           Refference # <?php echo $prediction->refference; ?>
        </p>
        <p>
          <a href="<?php echo base_url('index.php/Admin/PredictionUpdate/'); ?><?php echo $prediction->id; ?>" class="btn btn-warning btn-xs" role="button">Update !</a>
          <a href="<?php echo base_url('index.php/Admin/RemovePrediction/'); ?><?php echo $prediction->id; ?>" class="btn btn-danger btn-xs" role="button" onclick="return confirm('Are you sure you want to remove this item?');">Remove !</a> <br/>
          </p>
      </div>
    </div>

<?php 
  }
?>
</div>

        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12" style="margin-top: 4%;">
          <center style="color:silver;">Powered By- DWIN'S IT</center>
        </div>
      </div>
    </section>