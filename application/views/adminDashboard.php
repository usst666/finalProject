<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($this->session->userdata('level') != "1" || $this->session->userdata('user') != "admin") {
	redirect($_SERVER['HTTP_REFERER']);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home | Admin SIMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">      
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/icon.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/materialize.min.css">
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/angular.min.js"></script>
	<style type="text/css">
	html, body {
		height: 100%;
	}
	body {
		background: url(<?php echo base_url()?>assets/images/noise2.png);
		background-repeat: repeat;
		filter: contrast();
	}
	.header {
		height: 150px;
		position: relative;

	}
	.line {
		height: 150px;
		width: 65%;
		margin-left: -100px;
		-webkit-transform: skew(145deg);
		-moz-transform: skew(145deg);
		-o-transform: skew(145deg);
	}
	.helloText, .adminText {
		padding-left: 20%;
		padding-top: 2%;
		color: rgba(255, 255, 255, 0.7);
		font-family: courier;
		text-shadow: black 10px 10px 0.2em;
		font-size: 75px;
		-ms-transform: skew(-145deg); /* IE 9 */
		-webkit-transform: skew(-145deg); /* Safari */
		transform: skew(-145deg);
	}
	nav ul a {
		font-family: "Lato","proxima-nova","Helvetica Neue",Arial,sans-serif;
	}
	.navDiv {
		width: 50.5%;
		float: right;
		margin-top: -65px;
	}
	.circle {
		border: 5px solid rgba(0,0,0,0.7);
		border-radius: 50%;
		width: 150px;
		height: 150px;
	}
	.circleText {
		width: 100%;
		color: rgba(0,0,0,0.7);
	}
	.largeNav {
		padding-right: 9px !important;
	}
	#quotes {
		text-align: center;
		font-size: 26px;
		font-weight: 400;
		font-family: Georgia, Cambria, "Times New Roman", Times, serif;
		color: #345;
		animation: quoteAnimation 0.5s ease-in-out 1;
	}
	@keyframes quoteAnimation {
		0% {
			-webkit-transform: scale(0.1);
			-ms-transform: scale(0.1);
			-o-transform: scale(0.1);
			transform: scale(0.1);
			opacity: 0.1;
			transform: rotateX(-5deg);
		}
		50% {
			-webkit-transform: scale(1.2);
			-ms-transform: scale(1.2);
			-o-transform: scale(1.2);
			transform: scale(1.2);
		}
		75% {
			-webkit-transform: scale(0.9);
			-ms-transform: scale(0.9);
			-o-transform: scale(0.9);
			transform: scale(0.9);
		}
		87% {
			-webkit-transform: scale(1.05);
			-ms-transform: scale(1.05);
			-o-transform: scale(1.05);
			transform: scale(1.05);
		}
		100% {
			-webkit-transform: scale(1);
			-ms-transform: scale(1);
			-o-transform: scale(1);
			transform: scale(1);
			opacity: 1;
			transform: rotateX(0deg);
		}
	}
	#quotes b {
		display: block;
		width: 90%;
		margin: auto;
		font-weight: 400;
		font-family: Georgia, Cambria, "Times New Roman", Times, serif;
		color: #444;
		line-height: 2.5;
		text-shadow: 10px 10px 6px darkgray;
	}
	@media (max-width: 992px) {
		#quotes {
			margin-top: calc(60vh - 256px);
		}
		#quotes b {
			font-size: 40px;
		}
	}
	@media (min-width: 993px) {
		#quotes {
			margin-top: calc(60vh - 267px);
		}
		#quotes b {
			font-size: 60px;
		}
	}
	#quotes a {
		display: none;
	}
</style>
</head>
<body>
	<!--contents of the dropdown menu-->
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="<?php echo base_url('adminController/adminProfile')?>">Profile</a></li>
		<li class="divider"></li>
		<li><a href="<?php echo base_url('loginController/logout')?>">Logout</a></li>
	</ul>
	<ul id="dropdown2" class="dropdown-content">
		<li><a href="<?php echo base_url('adminController/adminProfile')?>">Profile</a></li>
		<li class="divider"></li>
		<li><a href="<?php echo base_url('loginController/logout')?>">Logout</a></li>
	</ul>

	<div class="header z-depth-2 teal darken-4 hide-on-med-and-down">
		<div class="line z-depth-2">
			<div class="helloText">
				HELLO ADMIN
			</div>
		</div>
		<div class="navDiv">
			<nav class="transparent z-depth-0">
				<div class="nav-wrapper">
					<ul class="right hide-on-med-and-down">
						<li><a href="<?php echo base_url('adminController')?>">Home</a></li>
						<li><a href="<?php echo base_url('adminController/studentAdmission')?>">Student Admission</a></li>
						<li><a href="<?php echo base_url('adminController/facultyRegistration')?>">Faculty Registration</a></li>
						<li><a class="largeNav waves-effect waves-light dropdown-button" data-activates="dropdown1" data-beloworigin="true"><?php echo explode(" ", trim($this->session->userdata('username')))[0]; ?> <i class="material-icons right">arrow_drop_down</i></a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<nav class="teal darken-4 hide-on-large-only">
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo" style="color: rgba(255, 255, 255, 0.9);">ADMIN PANEL</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-small-only">
				<li><a class="waves-effect waves-light dropdown-button" data-activates="dropdown2" data-beloworigin="true"><?php echo explode(" ", trim($this->session->userdata('username')))[0]; ?> <i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
			<ul id="mobile-demo" class="side-nav hide-on-large-only" style="width: 308px;">
				<li style="padding-top: 5%;"><label class="grey-text text-darken-3" style="padding-left: 5%; font-size: 15px;">Home</label></li>
				<li><div class="divider"></div></li>
				<li style="padding-top: 5%;"><a href="<?php echo base_url('adminController')?>" class="waves-effect blue-text text-darken-3">Home</a></li>
				<li><a class="waves-effect grey-text text-darken-3" href="<?php echo base_url('adminController/studentAdmission')?>">Student Registration</a></li>
				<li><a class="waves-effect grey-text text-darken-3" href="<?php echo base_url('adminController/facultyRegistration')?>">Faculty Registration</a></li>
				<li class="hide-on-med-and-up"><a href="<?php echo base_url('adminController/adminProfile')?>">Profile</a></li>
				<li class="hide-on-med-and-up"><a href="<?php echo base_url('loginController/logout')?>">Logout</a></li>
			</ul>
		</div>
	</nav>
	<div id="quotes" class="">
		<script type="text/javascript" src="https://www.brainyquote.com/link/quotebr.js"></script>
	</div>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/ajax.jquery-1.11.2.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
	<script type="text/javascript">
		$(".button-collapse").sideNav();

		$(document).ready(function() {
			if(!navigator.onLine) {
				$('#quotes').html("<b>Quote of the Day</b><br><?php echo $this->session->userdata('quote');?>");
			}
		});
	</script>
</body>
</html>