<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>Conductor - NAMMABMTC</title>

	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/ionicons.min.css">
	<link rel="stylesheet" href="assets2/css/owl.carousel.css">
	<link rel="stylesheet" href="assets2/css/owl.theme.css">
	<link rel="stylesheet" href="assets2/css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="assets2/css/main.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets2/js/html5shiv.js"></script>
				<script src="assets2/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets2/js/selectivizr.js"></script>
		    <![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" title="HOME"><i class="icon ion-android-bus"></i> Namma <span>BMTC</span></a>
	</nav>
	<section class="tour section-wrapper container">
		<h2 class="section-title">ಬಿಎಂಟಿಸಿ
ಗೆ ಸ್ವಾಗತ</h2>
		<p class="section-subtitle">
			Where would you like to go?
		</p>
		<div class="col-md-5"></div>
<form method="get" action="/conductor">
<div class="row">
<div class="col-md-2">
<div class="input-group">
<select class="form-control border-radius border-right"  name="busnumber">
	<option disabled selected class="form-control border-radius border-right">Bus Number</option>
	@foreach($stops as $stop)
	<option class="form-control border-radius border-right" value="{{$stop->route_no}}">{{$stop->route_no}}</option>
	@endforeach
</select>
<span class="input-group-addon border-radius custom-addon"></span>
</div>
<input class="btn btn-default border-radius custom-button" type="submit" value="Get list">
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<div class="text-left">
						&copy; Copyright
					</div>
				</div>
				<div class="col-xs-6">
					<div class="top">
						<a href="#header">
							<i class="ion-arrow-up-b"></i>
						</a>
					</div>
				</div>
			</div>
		</div>		
	</footer>


	<script src="assets2/js/jquery-1.11.2.min.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>
    <script src="assets2/js/owl.carousel.min.js"></script>
    <script src="assets2/js/contact.js"></script>
    <script src="assets2/js/jquery.flexslider.js"></script>
	<script src="assets2/js/script.js"></script>






</body>
</html>