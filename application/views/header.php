<!-- -->

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from condorthemes.com/flatdream/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Dec 2014 07:40:29 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/icon.png">

	<title>Student Inventory</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets/js/bootstrap/dist/css/bootstrap.css');?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/js/jquery.gritter/css/jquery.gritter.css');?>" />
	<link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome-4/css/font-awesome.min.css');?>">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="../../assets/js/html5shiv.js"></script>
	  <script src="../../assets/js/respond.min.js"></script>
	<![endif]-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/jasny.bootstrap/extend/css/jasny-bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/jquery.nanoscroller/nanoscroller.css');?>" />
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/jquery.codemirror/lib/codemirror.css');?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/jquery.codemirror/theme/ambiance.css');?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/jquery.vectormaps/jquery-jvectormap-1.2.2.css');?>" media="screen"/>
  
	<link href="<?= base_url('assets/css/style.css');?>"" rel="stylesheet" />	
    
</head>
<body class="animated">

<div id="cl-wrapper">

  <div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
      <div class="menu-space">
        <div class="content">
          <div class="sidebar-logo">
            <div class="logo">
                <a href="index.php"></a>
            </div>
          </div>
          <ul class="cl-vnavigation">
            <li><a href="<?= base_url('admin/user_reg')?>"><i class="fa fa-home"></i><span>Add Users</span></a>
            </li>
            
            <li><a href="viewrecords.php"><i class="fa fa-home"></i><span>View Student Record</span></a>
            </li>

            <li><a href="<?= base_url('encode_decode/encode_data')?>"><i class="fa fa-home"></i><span>Encode</span></a>
            </li>
            <li><a href="<?= base_url('encode_decode/decode_data')?>"><i class="fa fa-home"></i><span>decode</span></a>
            </li>

          </ul>


        </div>
      </div>
    </div>
  </div>
	<div class="container-fluid" id="pcont">
   <!-- TOP NAVBAR -->
  <div id="head-nav" class="navbar navbar-default">
    <div class="container-fluid">
      <!-- new work -->
      <div class="navbar-collapse">
        <ul class="nav navbar-nav navbar-right user-nav">
          <li class="dropdown profile_menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="<?=base_url('assets/images/').$_SESSION['imagename'];?>" width="30" height="30"><span><?= $_SESSION['username']?></span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">My Account</a></li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Messages</a></li>
              <li class="divider"></li>
              <li><a href="logout">Sign Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- end work -->

      <div class="cl-mcont">
        <div class="row">
