<?php
     if ($acct_type == "2"){
        redirect('employee/Not_allowed');
     }
    ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Alumni</title>
    <?php
       $this->load->view('header/link');
    ?>
	     <link type="text/css" rel="stylesheet" href="<?=base_url()?>vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/pages/dataTables.bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/pages/tables.css" />



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
       $this->load->view('header/header');
       ?>
        <!-- /#left -->
         <div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar">
                        <div class="row">
                        <div class="col-lg-6 col-sm-4">
                            <h4 class="nav_top_align">
                            <i class="fa fa-fw fa-folder-open"></i>
                            Alumni View
                        </h4>
                        </div>
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="<?=base_url('dashboard')?>">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Alumni</a>
                                </li>
                                <li class="active breadcrumb-item">Alumni View</li>
                            </ol>
                        </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-white">
                                Alumni List
                            </div>
                            <div class="card-block m-t-35" id="user_body">

                        <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
                            <div role="alert" class="alert alert-success">
                                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                    <strong>Well done!!</strong> <?=$this->session->flashdata('SUCCESSMSG')?>
                            </div>
                        <?php } ?>

                                <div class="table-toolbar">
                                    <div class="btn-group">
                                        <a href="<?=base_url('users-register')?>" id="editable_table_new" class=" btn btn-default">
                                        Add Users &nbsp;<i class="fa fa-plus"></i>
                                    </a>
                                    </div>
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th style="display: none;">id</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Username</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Full Name</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Status</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Account Type</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="2">Action</th>
                                                    <!--<th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Date register</th>-->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!empty($getUserData))
                                                {
													foreach ($getUserData as $value)
													{ ?>
														<tr>
															<td style="display: none;"><?=$value->acc_id?></td>
															<td><?=$value->username?></td>
															<td><span><?=$value->firstname." ".$value->lastname ?></span</td>
                              <td>

                                  <?php
                                  if ($value->status=='1') {
                                  ?>
                                  <span class="label label-info">Active</span>
                                  <?php
                                  }else {
                                  ?>
                                  <span class="label label-warning">Inactive</span>
                                  <?php
                                  }
                                  ?>

                                </td>


															<td>

                                  <?php
                                  if ($value->acct_type=='1') {
                                  ?>
                                  <span class="label label-info">ADMIN</span>
                                  <?php
                                  }else {
                                  ?>
                                  <span class="label label-warning">USER</span>
                                  <?php
                                  }
                                  ?>

                                </td>


															<td><?php echo anchor('employee/delete_user?id='.$value->acct_id, 'DELETE', 'id="$value->acct_id"');?></td>
                              <td><?php echo anchor('edituser/update/'.$value->acct_id, 'UPDATE', 'id="$value->acct_id"');?></td>
															<!--<td><?=$value->created_date?></td>-->
														</tr>
												<?php	}
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
    </div>

</div>
<script type="text/javascript" src="<?=base_url()?>js/components.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/custom.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/select2/js/select2.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/pages/users.js"></script>

<script>
$(document).ready(function() {

});
</script>


</body>
</html>
