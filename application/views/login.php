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
<body style="-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: -moz-none;-o-user-select: none;user-select: none;">
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
<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_top_bottom">
            <div class="row" style="margin-top:100px">
                <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                            <span class="text-white"> Alumni Panel<br/>
                                Log In</span>
                        </h3>
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
                            <div role="alert" class="alert alert-danger">
                                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                    <?=$this->session->flashdata('SUCCESSMSG')?>
                            </div>
                        <?php } ?>
                        <form id="login_validator" method="post" class="login_validator">
                            <div class="form-group">
                                <label for="username" class="col-form-label"> Username </label>
                                <div class="input-group">
                                    <span class="input-group-addon input_username"><i class="fa fa-envelope text-primary"></i></span>
                                      <input type="text" value="<?=!empty($username)?$username:''?>" class="form-control  form-control-md" id="username" name="username" placeholder="Username">
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="password" class="col-form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                            class="fa fa-lock field-icon toggle-password text-primary"></i></span>
                                    <input type="password" id="password-field" class="form-control form-control-md" value="<?=!empty($password)?$password:''?>" id="password"   name="password" placeholder="Password">
                                    <span class="input-group-addon addon_password"><i toggle="#password-field"
                                            class="fa fa-fw fa-eye field-icon toggle-password text-primary"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
<!--                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input form-control">
                                        <span class="custom-control-indicator"></span>
                                        <a class="custom-control-description">Keep me logged in</a>
                                    </label>-->
                                </div>
                                <div class="col-6 text-right forgot_pwd">
                                    <a href="forgot_password.php" class="custom-control-description forgottxt_clr">Forgot password?</a>
                                </div>
                            </div>
                        </div>
<!--                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 m-t-10">
                                    <div class="icon-white btn-facebook icon_padding loginpage_border">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                        <span class="text-white icon_padding text-center question_mark">Log In With Facebook</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 pull-lg-right m-t-10">
                                    <div class="icon-white btn-google icon_padding loginpage_border">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        <span class="text-white icon_padding question_mark">Log In With Google+</span>
                                    </div>
                                </div>
                            </div>
                        </div>-->
<!--                        <div class="form-group">
                            <label class="col-form-label">Don't you have an Account? </label>
                            <a href='register.html' class="text-primary login_hover"><b>Sign Up</b></a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="<?=base_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/tether.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="<?=base_url();?>vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/wow/js/wow.min.js"></script>
<!--End of plugin js-->
<script type="text/javascript" src="<?=base_url();?>js/pages/login.js"></script>

<script type="text/javascript">
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
</body>

</html>
