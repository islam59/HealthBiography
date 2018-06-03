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
    <section class="container doctor-registration">
              <div class="form-header">
                <h3>Doctor Registration Form ! 
                <small><a href="<?php echo base_url('index.php/Login/'); ?>" class="btn btn-default pull-right" style="border-radius: 0px;">Back To Login !</a></small>
                </h3>
              </div><HR/>
        
<form class="form-horizontal" role="form" action="<?php echo base_url('index.php/Register/RegisterDoctorForm'); ?>" method="post">
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==-->
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Username <sup>*</sup></label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username !">
    </div>
  </div>
  
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password<sup>*</sup></label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password !">
    </div>
  </div>
  <div class="form-group">
    <label for="confirmpassword" class="col-sm-2 control-label">Confirm Password<sup>*</sup></label>
    <div class="col-sm-10">
      <input type="password" name="c_password" class="form-control" id="confirmpassword" placeholder="Confirm Password !">
    </div>
  </div>
  <HR/>

  <div class="form-group">
    <label class="col-sm-2 control-label" for="firstname">First Name<sup>*</sup></label>
    <div class="col-sm-4">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname !">
    </div>
    <label for="lastname" class="col-sm-2 control-label">Lastname<sup>*</sup></label>
    <div class="col-sm-4">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname !">
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email<sup>*</sup></label>
    <div class="col-sm-4">
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email !">
    </div>
    <label for="confirmemail" class="col-sm-2 control-label">Confirm Email<sup>*</sup></label>
    <div class="col-sm-4">
      <input type="text" name="c_email" class="form-control" id="confirmemail" placeholder="Confirm Email !">
    </div>
  </div>

  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Phone Number</label>
    <div class="col-sm-4">
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number !">
    </div>
    <label for="country" class="col-sm-2 control-label">Country<sup>*</sup></label>
    <div class="col-sm-4">
      <select name="country" class="form-control" style="border-radius: 0px;">
        <option value="">Select Country !</option>
<option value="">Country...</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="gender" class="col-sm-2 control-label">Gender<sup>*</sup></label>
    <div class="col-sm-1">
        <div class="radio">
          <label>
            <input type="radio" name="gender" id="gender" value="Male" checked>Male
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="gender" id="gender" value="Female">Female
          </label>
        </div>
    </div>
    <label for="address" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-7">
      <textarea name="address" id="address" class="form-control" rows="4" style="border-radius: 0px;" placeholder="Enter Address !"></textarea>
    </div>
  </div>
  <HR/>


  <div class="form-group">
    <label for="country" class="col-sm-2 control-label">Departments<sup>*</sup></label>
    <div class="col-sm-4">
      <input type="text" name="department" class="form-control" style="border-radius: 0px;" placeholder="Enter Department Name !">
    </div>
    <label for="Cphone" class="col-sm-2 control-label">Consulting Phone<sup>*</sup><sup>*</sup></label>
    <div class="col-sm-4">
      <input type="text" name="consultingphone" class="form-control" id="Cphone" placeholder="Enter Consulting Phone Number !">
    </div>

  </div>

  <div class="form-group">
    <label for="education" class="col-sm-2 control-label">Educational Details<sup>*</sup></label>
    <div class="col-sm-4">
      <textarea name="education" id="education" class="form-control" rows="4" style="border-radius: 0px;" placeholder="Enter Educational Details !"></textarea>
    </div>

    <label for="work" class="col-sm-2 control-label">Working Details</label>
    <div class="col-sm-4">
      <textarea name="work" id="work" class="form-control" rows="4" style="border-radius: 0px;" placeholder="Enter Working Details !"></textarea>
    </div>
  </div>
  <hr/>
  <div class="form-group" style="margin-top:2%; margin-bottom: 2%;">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <button type="submit" class="btn btn-default pull-right" style="border-radius: 0px;">Register As Doctor !</button>
        </label>
      </div>    
    </div>
  </div>
</form>
    </section>
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