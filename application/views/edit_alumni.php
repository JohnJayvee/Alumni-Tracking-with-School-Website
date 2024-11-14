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
<?php
     $this->load->view('header/top_header');
  ?>
      <!-- /.navbar -->
      <!-- /.head --> </div>
  <!-- /#top -->
  <div class="wrapper">
      <?php
     $this->load->view('header/header_update');
     ?>
      <!-- /#left -->
       <div id="content" class="bg-container">
          <header class="head">
              <div class="main-bar">
                  <div class="row">
                  <div class="col-sm-5 col-lg-6 skin_txt">
                      <h4 class="nav_top_align">
                          <i class="fa fa-pencil"></i>
            Alumni Register
                      </h4>
                  </div>
                  <div class="col-sm-7 col-lg-6">
                      <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                          <li class="breadcrumb-item">
                              <a href="<?=base_url()?>dashboard">
                                  <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                  Dashboard
                              </a>
                          </li>
                          <li class="breadcrumb-item">
                              <a href="#">ALumni</a>
                          </li>
                          <li class="active breadcrumb-item">Alumni Update</li>
                      </ol>
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
                                 Alumni Update Form
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



                                  <div class="row">
                                      <div class="col-lg-4 input_field_sections">
                                          <h5>First Name <span style="color: #cc0000">*</span></h5>
                                         <input required type="text" class="form-control" name="firstname" value="<?= $firstname ?>"/>
                                      </div>
                                      <div class="col-lg-4 input_field_sections">
                                          <h5>Middle Name <span style="color: #cc0000">*</span></h5>
                                         <input required type="text" class="form-control" name="middlename" value="<?= $middlename ?>"/>
                                      </div>
                                      <div class="col-lg-4 input_field_sections">
                                          <h5>Last Name <span style="color: #cc0000">*</span></h5>
                                         <input required type="text" class="form-control" name="lastname" value="<?= $lastname ?>"/>
                                      </div>

                                  </div>

                                  <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Birth Date <span style="color: #cc0000">*</span></h5>
                                        <input required="" type="text" class="form-control datepicker" name="datebirth" value="<?= $datebirth ?>" style="background-color: white;" required readonly/>
                                      </div>

                                      <div class="col-lg-4 input_field_sections">
                                          <h5>Gender <span style="color: #cc0000">*</span></h5>
                                          <select class="form-control" name="sex" value="<?= $sex ?>" required>
                                          <option value="">Select Gender...</option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                          </select>
                                      </div>

                                      <div class="col-lg-4 input_field_sections">
                                          <h5>Civil Status <span style="color: #cc0000">*</span></h5>
                                          <select class="form-control" name="civil_status" value="<?= $civil_status ?>" required>
                                          <option value="">Select Civil Status...</option>
                                          <option value="Single">Single</option>
                                          <option value="Married">Married</option>
                                          </select>
                                      </div>

                                  </div>


                      <div class="row">

                        <div class="col-lg-4 input_field_sections">
                            <h5>Contact Number<span style="color: #cc0000">*</span></h5>
                           <input required type="text" class="form-control" name="contact_number" value="<?= $contact_number ?>"/>
                        </div>

                        <div class="col-lg-4 input_field_sections">
                            <h5>Email<span style="color: #cc0000">*</span></h5>
                           <input required type="text" class="form-control" name="email" value="<?= $email ?>"/>
                        </div>

                        <div class="col-lg-4 input_field_sections">
                            <h5>Citizenship<span style="color: #cc0000">*</span></h5>
                           <input required type="text" class="form-control" name="citizenship" value="<?= $citizenship ?>"/>
                        </div>

                        </div

                        <div class="row">


        <div class="col-lg-12 input_field_sections">
                                <h5>Address <span style="color: #cc0000">*</span></h5>
          <textarea required="" name="address" class="form-control" ><?= $address ?></textarea>
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
                    <button type="submit" class="btn btn-primary">Save</button>
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





</body>
</html>
