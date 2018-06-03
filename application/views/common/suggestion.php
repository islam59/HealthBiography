<section class="main-content container">
  <div class="content-home">

<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
<?php 
  if($this->session->userdata('type') == 'doctor'){
?>
<!-- Button trigger modal -->
<button class="btn btn-primary btn-sm pull-left row" data-toggle="modal" data-target="#myModal">
  Add New Post !
</button>
<?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==-->

<!-- Modal Admin-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" style="margin-top:4%; width:80%;" >
    <div class="modal-content" style="border-radius:0px; background: rgba(70,30,0,0.5);">

        <form role="form" action="<?php echo base_url('index.php/Doctor/SuggestionForm');?>" method="post" style="text-align:left;">
            <div class="modal-header" style="background:rgb(27, 44, 45);">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color:white;">Post Suggestion !</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="color:white;">Title of Post !</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Username/Email" style="border-radius: 0px;">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" style="color:white;">Suggestion Content !</label>
                  <textarea class="form-control" name="content" id="body" rows="10" placeholder="Enter Suggestion Content !" style="border-radius: 0px;"></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" style="border-radius: 0px;">Post Suggestion !</button>
            </div>
        </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php 
  }
?>
<br/><br/><br/>
</div>
<form class="form-inline" role="form" style="margin-top:3%;">
    <div class="input-group">
      <span class="input-group-addon"  style="border-radius: 0px; background:orange; font-weight: bold; border-color:orange;">Search</span>
      <input type="text" class="form-control"  style="border-radius: 0px; background: rgba(0,0,0,0.3); border-color:orange;" placeholder="Enter Search Key for Doctor !">
      <span class="input-group-addon"  style="border-radius: 0px; background:orange; border-color:orange;"><i class="fa fa-search" aria-hidden="true"></i></span>
    </div>
</form>


<?php 
  foreach ($suggestions as $suggestion) {
?>
    <div class="col-sm-12 col-md-12 col-lg-12" style="border:1px solid orange; text-align: justify; margin-top:1%;">
      <div class="jumbotron" style="margin:0px; padding:0px; background: none;">
        <h4><?php echo strToUpper($suggestion->title); ?>
          <small><br/>Posted By- <?php echo $suggestion->posted_by; ?>  &nbsp; &nbsp; &copy; <?php echo $suggestion->published; ?></small>
        </h4>
        <p style="font-size:12px;">
          <?php echo substr($suggestion->content, 0, 640); ?>
        </p>
        <p>
          <a class="btn btn-default btn-sm" role="button" data-toggle="modal" data-target="#myModalView<?php echo $suggestion->id; ?>">See More !</a>
          <?php if($suggestion->posted_by == $this->session->userdata('username')){ ?>
          <a class="btn btn-warning btn-sm" role="button" data-toggle="modal" data-target="#myModalUpdate<?php echo $suggestion->id; ?>">Update !</a>
          <a href="<?php echo base_url('index.php/Doctor/SuggestionRemove/'); ?><?php echo $suggestion->id; ?>" class="btn btn-danger btn-sm" role="button">Remove !</a> 
          <?php } ?>
          </p>
      </div>
    </div>
<!-- Modal Admin-->
<div class="modal fade" id="myModalView<?php echo $suggestion->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" style="margin-top:4%; width:80%;" >
    <div class="modal-content" style="border-radius:0px; background: rgba(70,30,0,0.5); text-align: left;">


            <div class="modal-header" style="background:rgb(27, 44, 45);">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color:white;"><?php echo $suggestion->title; ?></h4>
            </div>
            <div class="modal-body" style="background: rgba(0,0,0,0.9);">
              <?php echo $suggestion->content; ?>
            </div>
            <div class="modal-footer">
              Posted By# <?php echo $suggestion->posted_by; ?> &copy; Published# <?php echo $suggestion->published; ?>
            </div>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal Admin-->
<div class="modal fade" id="myModalUpdate<?php echo $suggestion->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" style="margin-top:4%; width:80%;" >
    <div class="modal-content" style="border-radius:0px; background: rgba(70,30,0,0.5);">

        <form role="form" action="<?php echo base_url('index.php/Doctor/SuggestionUpdateForm');?>" method="post" style="text-align:left;">
            <input type="text" name="id" value="<?php echo $suggestion->id; ?>">
            <div class="modal-header" style="background:rgb(27, 44, 45);">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color:white;">Post Suggestion !</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="color:white;">Title of Post !</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" style="border-radius: 0px;" value="<?php echo $suggestion->title; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" style="color:white;">Suggestion Content !</label>
                  <textarea class="form-control" name="content" id="body" rows="10" placeholder="Enter Suggestion Content !" style="border-radius: 0px;"> <?php echo $suggestion->content; ?> </textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" style="border-radius: 0px;">Update Suggestion !</button>
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