<section class="main-content container">
  <div class="content-home">

        <div class="table-responsive">
            <table id="mytableId" class="display table">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Patient Name</th>
                        <th>Consulting Location</th>
                        <th>Consulting Date</th>
                    </tr>
                </thead>
                <tbody>
<?php 
    foreach ($patients as $patient) {
?>
                    <tr>
                        <td style="background: rgba(0,0,0,0.9);"><?php echo $patient->id; ?></td>
                        <td>

                              <?php 
                                  $userid = $patient->userid; 
                                  $getuser = $this->user_model->getUserById($userid); 
                                  if(isset($getuser)){
                                    echo $getuser->firstname.'  '.$getuser->lastname; 
                                  }
                              ?>                               

                        </td>
                        <td>
                              <?php 
                                  $locationid = $patient->locationid; 
                                  $getconsultingdata = $this->consulting_model->getConsultingDataById($locationid); 
                                  if(isset($getconsultingdata)){
                                    echo $getconsultingdata->address; 
                                  }
                              ?>  
                        </td>
                        <td>
                              <?php 
                                  $locationid = $patient->locationid; 
                                  $getconsultingdata = $this->consulting_model->getConsultingDataById($locationid); 
                                  if(isset($getconsultingdata)){
                                    echo $getconsultingdata->consultingdate; 
                                  }
                              ?>  
                        </td>
                    </tr>
<?php 
    }
?>




<!--
                    <tr>
                        <td style="background: rgba(0,0,0,0.9);"><a href="">01</a></td>
                        <td><a href="">Abdul Wahab ch.</a></td>
                        <td><a href="">Dhaka- +880 9898 998888</a></td>
                        <td><a href="">23 oct 2017</a></td>
                        <td>
                          <a href="" class=""><i class="fa fa-pencil" aria-hidden="true"></i></a> &nbsp; &nbsp;
                          <a href="" class=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
-->

                </tbody>

            </table>
        </div>

  </div>
</section>