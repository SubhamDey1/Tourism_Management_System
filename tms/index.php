<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>TMS | Tourism Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script
		type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Custom Theme files -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->
</head>

<body>
	<?php include('includes/header.php');?>
	<!-- <div class="container"> -->
	<!-- <div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS - Tourism Management System</h1>
	</div> -->
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/2.jpg" class="d-block w-100" style="width:100%;height:35vw;" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>TMS</h5>
					<!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/6.jpeg" class="d-block w-100" style="width:100%;height:35vw;" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>TMS</h5>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/1.jpeg" class="d-block w-100" style="width:100%;height:35vw;" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>TMS</h5>
					<!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/7.jpg" class="d-block w-100" style="width:100%;height:35vw;" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>TMS</h5>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
				</div>
			</div>

			<div class="carousel-item">
				<img src="img/11.jpg" class="d-block w-100" style="width:100%;height:35vw;" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>TMS</h5>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- </div> -->


	<!--- rupes ---->
	<div class="container">
		<div class="rupes">
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s"
				style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a href="offers.html"><i class="fa fa-inr" style="font-size: 5em;"></i></a>
				</div>
				<div class="rup-rgt">
					<h3>UP TO 50% OFF</h3>
					<h4><a href="#">TRAVEL SMART</a></h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s"
				style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a href="#"><i class="fa fa-h-square"></i></a>
				</div>
				<div class="rup-rgt">
					<h3>UP TO 70% OFF</h3>
					<h4><a href="#">ON HOTELS ACROSS WORLD</a></h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s"
				style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a href="offers.html"><i class="fa fa-mobile"></i></a>
				</div>
				<div class="rup-rgt">
					<h3>FLAT 50% OFF</h3>
					<h4><a href="offers.html">US APP OFFER</a></h4>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--- /rupes ---->


	<!---holiday---->
	<div class="container">
		<div class="holiday">
			<h3>Package List</h3>
			<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>"
						class="img-responsive imgcl" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 flpd room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5 class="paddi">₹<?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>"
						class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<?php }} ?>


			<div><a href="package-list.php" class="view">View More Packages</a></div>
		</div>
		<div class="clearfix"></div>
	</div>



	<!--- routes ---->
	<div class="routes">
		<div class="container">
			<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
				<div class="rou-left">
					<a href="#"><i class="glyphicon glyphicon-list-alt" style="font-size: 4em;"></i></a>
				</div>
				<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
					<h3>80000</h3>
					<p>Enquiries</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 routes-left">
				<div class="rou-left">
					<a href="#"><i class="fa fa-user"></i></a>
				</div>
				<div class="rou-rgt">
					<h3>1900</h3>
					<p>Regestered users</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
				<div class="rou-left">
					<a href="#"><i class="fa fa-ticket"></i></a>
				</div>
				<div class="rou-rgt">
					<h3>7,00,00,000+</h3>
					<p>Booking</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<?php include('includes/footer.php');?>
	<!-- signup -->
	<?php include('includes/signup.php');?>
	<!-- //signu -->
	<!-- signin -->
	<?php include('includes/signin.php');?>
	<!-- //signin -->
	<!-- write us -->
	<?php include('includes/write-us.php');?>
	<!-- //write us -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous"></script>
</body>

</html>