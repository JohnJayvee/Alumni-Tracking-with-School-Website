  <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Alumni</title>
    <?php
       $this->load->view('header/link');
    ?>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

</head>

<body class="body" style="-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: -moz-none;-o-user-select: none;user-select: none;">



<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->

        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">

        <!-- /#left -->
         <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-5 col-lg-6 skin_txt">
                        <h4 class="nav_top_align">

							Alumni Register
                        </h4>
                    </div>

                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container forms">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-white">
                                   Alumni Register Form
                                </div>
                                <div class="card-block">
					<?php if ($this->session->flashdata('SUCCESSMSG')) { ?>
					<div role="alert" class="alert alert-success">
					   <button data-dismiss="alert" class="close" type="button">
						   <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
					   <strong>Well done!</strong>
					   <?= $this->session->flashdata('SUCCESSMSG') ?>
					</div>
					<?php } ?>
									<form action="" method="post">


                                        <div onloadedmetadata=""class="col-lg-4 input_field_sections" style="width:800px; margin:0 auto;">
                                            <h5>Your Alumni Tracking Number<span style="color: #cc0000">*</span></h5>
											<input required type="text" class="form-control" name="alumni_tracking_no" style="cursor: no-drop;-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none; -moz-user-select: none; -ms-user-select: none;user-select: none;" value="<?php $this->load->helper('rand_helper');$randomString=generateRandomString(3);echo $randomString;?>-<?php $this->load->helper('rand_helper');$randomString=generateRandomString(3);echo $randomString;?>-<?php $this->load->helper('rand_helper');$randomString=generateRandomString(3);echo $randomString;?>" readonly/>

                                        </div>
                                    <div class="row">
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>First Name <span style="color: #cc0000">*</span></h5>
											                     <input required type="text" class="form-control" name="firstname" value=""/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Middle Name <span style="color: #cc0000">*</span></h5>
											                     <input required type="text" class="form-control" name="middlename" value=""/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Last Name <span style="color: #cc0000">*</span></h5>
											                     <input required type="text" class="form-control" name="lastname" value=""/>
                                        </div>

                                    </div>

                                    <div class="row">
                                      <div class="col-lg-4 input_field_sections">
                                          <h5>Birth Date <span style="color: #cc0000">*</span></h5>
                    											<input required="" type="text" class="form-control datepicker" name="datebirth" value="" style="background-color: white;" required readonly/>
                                        </div>

                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Gender <span style="color: #cc0000">*</span></h5>
                                            <select class="form-control" name="sex" value="" required>
                                            <option value="">Select Gender...</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Civil Status <span style="color: #cc0000">*</span></h5>
                                            <select class="form-control" name="civil_status" value="" required>
                                            <option value="">Select Civil Status...</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            </select>
                                        </div>

                                    </div>


                        <div class="row">

                          <div class="col-lg-4 input_field_sections">
                              <h5>Contact Number<span style="color: #cc0000">*</span></h5>
                             <input required type="text" class="form-control" name="contact_number" value=""/>
                          </div>

                          <div class="col-lg-4 input_field_sections">
                              <h5>Email<span style="color: #cc0000">*</span></h5>
                             <input required type="text" class="form-control" name="email" value=""/>
                          </div>

                          <div class="col-lg-4 input_field_sections">
                              <h5>Citizenship<span style="color: #cc0000">*</span></h5>
                             <input required type="text" class="form-control" name="citizenship" value=""/>
                          </div>

                          </div

                          <div class="row">


          <div class="col-lg-12 input_field_sections">
                                  <h5>Address <span style="color: #cc0000">*</span></h5>
            <textarea required="" name="address" class="form-control"></textarea>
            </div>
              </div>

                                    <div class="row">

										<div class="col-lg-8 input_field_sections" style="margin-bottom:20px;">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<button type="submit" class="btn btn-success">Save</button>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button onclick="goBack()" class="btn btn-danger">Cancel</button>
									    </div>

						            </div>

									</form>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- /.outer -->
            </div>
        </div>
    </div>

</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="<?=base_url();?>js/components.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/custom.js"></script>
<!-- global scripts end-->

<script type="text/javascript" src="<?=base_url();?>vendors/raphael/js/raphael-min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/d3/js/d3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/c3/js/c3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/toastr/js/toastr.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.js" ></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.time.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotspline/js/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.categories.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/jquery_newsTicker/js/newsTicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/countUp.js/js/countUp.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/jquery-ui.js"></script>
<!--end of plugin scripts-->
  <script>

  $( function() {
	  $( ".datepicker" ).datepicker({
			dateFormat: "yy-mm-dd"
		});
  });
  </script>

  <script>
function goBack() {
    window.history.back();
}
</script>






</body>
</html>
