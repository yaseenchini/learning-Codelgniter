<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from condorthemes.com/flatdream/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Dec 2014 07:45:26 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?= base_url('assets/images/icon.png')?>">

	<title>Student Registration</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets/js/bootstrap/dist/css/bootstrap.css');?>" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome-4/css/font-awesome.min.css');?>">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="../../assets/js/html5shiv.js"></script>
	  <script src="../../assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
	<link href="assets/css/style.css" rel="stylesheet" />	

</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

	<div class="middle-login">
		<div class="block-flat">
			<?php if($error = $this->session->flashdata('login_failed')):?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-times-circle sign"></i><strong>Error!</strong><?= $error?>
			</div>
			<!--  -->



			<?php endif ?>
			<div class="header">							
				<h3 class="text-center"><img class="logo-img" src="<?= base_url('assets/images/logo.png')?>" alt="logo"/></h3>
			</div>
			<div>
				<!-- <form style="margin-bottom: 0px !important;" class="form-horizontal"> -->
				<?php echo form_open('login/admin_login', ['class'=>'form-horizontal' , 'style'=>'margin-bottom: 0px !important;']);?>
					<div class="content">
						<h4 class="title">Login Access</h4>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<?php echo form_input(['name'=>'username','placeholder'=>'Username','class'=>'form-control','value'=>set_value('username')]);?>
										<!-- <input type="text" placeholder="Username" id="username" class="form-control"> -->
									</div>
									<?php echo form_error('username'); ?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<?php echo form_input(['type'=>'password','name'=>'password','placeholder'=>'Password','class'=>'form-control' ,'value'=>set_value('password')]);
										?>
										<!-- <input type="password" placeholder="Password" id="password" class="form-control"> -->
										<?php echo form_error('password'); ?>
									</div>
								</div>
							</div>
							
					</div>
					<div class="foot">
						<!-- <button class="btn btn-default" data-dismiss="modal" type="button">Register</button> -->
						<?php 
							echo form_reset(['value'=>'Cancel','class'=>'btn btn-danger']),
							form_submit(['value'=>'Log me in','class'=>'btn btn-primary']);?>
						<!-- <button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button> -->
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; 2014 Your Company</a></div>
	</div> 

	
	
</div>

<script src="<?= base_url('assets/js/jquery.js')?>"></script>
	<script type="text/javascript">
    $(function(){
      $("#cl-wrapper").css({opacity:1,'margin-left':0});
    });
  </script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#not-success').click(function(){
	      $.gritter.add({
	        title: 'Success',
	        text: 'This is a simple Gritter Notification.',
	        class_name: 'success'
	      });
	    });
    });
</script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <script src="<?= base_url('assets/js/behaviour/voice-commands.js')?>"></script>
  <script src="<?= base_url('assets/js/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.flot/jquery.flot.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.flot/jquery.flot.pie.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.flot/jquery.flot.resize.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.flot/jquery.flot.labels.js')?>"></script>
</body>

<!-- Mirrored from condorthemes.com/flatdream/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Dec 2014 07:45:26 GMT -->
</html>
