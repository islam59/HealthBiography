<section class="main-content container">
  <div class="content-home">
<?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==--><br/><br/>

        <div class="table-responsive">
            <table id="mytableId" class="display table">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Consulting Location</th>
                        <th>Consulting Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

<?php 
  foreach ($locations as $location) {
?>
                    <tr>
                        <td style="background: rgba(0,0,0,0.9);"><?php echo $location->lid; ?></td>
                        <td><?php echo $location->address; ?> </td>
                        <td><?php echo $location->consultingdate; ?></td>
                        <td>
                          <a href="<?php echo base_url('index.php/Doctor/LocationRemove/'); ?><?php echo $location->lid; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>


<?php 
  }
?>


                </tbody>

            </table>
        </div>


<!-- Button trigger modal -->
<button class="btn btn-primary btn-sm pull-left" data-toggle="modal" data-target="#addlocation">Add New Location</button>
<!-- Modal Admin-->
<div class="modal fade" id="addlocation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="margin-top:100px;">
    <div class="modal-content" style="border-radius:0px; background: rgba(70,30,0,0.5);">

        <form role="form" action="<?php echo base_url('index.php/Doctor/LocationForm');?>" method="post" style="text-align: left;">
            <div class="modal-header" style="background:rgb(27, 44, 45);">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color:white;">Add Consulting Event !</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="color:white;">Consulting Address</label>
                  <textarea class="form-control" name="address" style="border-radius: 0px;" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" style="color:white;">Consulting Date</label>
                  <input type="date" name="consultingdate" class="form-control" style="border-radius: 0px;">
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" style="border-radius: 0px;">Save Consulting Event !</button>
            </div>
        </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  </div>
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
          <center style="color:silver; margin-top:3%; margin-bottom: 3%" >Powered By- DWIN'S IT</center>
        </div>
</section>

