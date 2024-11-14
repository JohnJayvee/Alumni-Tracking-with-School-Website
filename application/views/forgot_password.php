<!DOCTYPE html>
<html>
<head>
    <title>Alumni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>css/components.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>css/custom.css"/>
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/wow/css/animate.css"/>
    <!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>css/pages/login.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/fontawesome/css/font-awesome.min.css"/>
    <script src="<?=base_url() ?>assets/jquery/jquery.min.css"></script>
</head>
<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="form-group">
    <label for="password" class="col-form-label">Password</label>
    <div class="input-group">
        <span class="input-group-addon addon_password"><i toggle="#password-field"
                class="fa fa-fw fa-eye field-icon toggle-password text-primary"></i></span>
        <input type="password" id="password-field" class="form-control form-control-md" value="<?=!empty($password)?$password:''?>" id="old_password"   name="password" placeholder="Password">
    </div>
</div>
<div class="form-group">
    <label for="password" class="col-form-label">New Password</label>
    <div class="input-group">
        <span class="input-group-addon addon_password"><i toggle="#password-field"
                class="fa fa-fw fa-eye field-icon toggle-password text-primary"></i></span>
        <input type="password" id="password-field" class="form-control form-control-md" value="<?=!empty($password)?$password:''?>" id="new_password"   name="new_password" placeholder="Password">
    </div>
</div>
<div class="form-group">
    <label for="password" class="col-form-label">Confirm Password</label>
    <div class="input-group">
        <span class="input-group-addon addon_password"><i toggle="#password-field"
                class="fa fa-fw fa-eye field-icon toggle-password text-primary"></i></span>
        <input type="password" id="password-field" class="form-control form-control-md" value="<?=!empty($password)?$password:''?>" id="con_password"   name="con_password" placeholder="Password">
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-12">
            <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
        </div>
    </div>
</div>
<script type="text/javascript" src="<?=base_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/tether.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="<?=base_url();?>vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/wow/js/wow.min.js"></script>
<!--End of plugin js-->
<script type="text/javascript" src="<?=base_url();?>js/pages/login.js"></script>
