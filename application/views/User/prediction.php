<section class="main-content container">
  <div class="content-home">

<form class="form-inline" role="form" style="margin-top:3%;" action="<?php echo base_url('index.php/User/Prediction'); ?>" method="post">
    <div class="input-group">
      <span class="input-group-addon"  style="border-radius: 0px; background:orange; font-weight: bold; border-color:orange;">Search</span>
      <input type="text" name="searchPred" class="form-control"  style="border-radius: 0px; background: rgba(0,0,0,0.3); border-color:orange;" placeholder="Enter Search Key !">
      <span class="input-group-addon"  style="border-radius: 0px; background:orange; border-color:orange;">
        <button type="submit" style="margin:0; padding:0; background: none; border:0px;"><i class="fa fa-search" aria-hidden="true"></i></button>
      </span>
    </div>
</form>
<?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==--><br/>
<?php 
if(isset($predictions)){

  foreach ($predictions as $prediction) {
?>
    <div class="col-sm-12 col-md-12 col-lg-12" style="border:1px solid orange; padding:1%; text-align: justify; margin-top:1%;">
          <h4>Search Key Like# <?php echo $prediction->symptom; ?></h4>
          <p>
            Suggestion# <?php echo $prediction->suggestion; ?>
            <br/>
            Refference# <?php echo $prediction->refference; ?><br/>
          </p>
    </div>

<?php 
  }}
?>

  </div>
</section>