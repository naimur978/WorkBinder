<?php
session_start();
if($_SESSION['success'] != "true"){
	echo "<script>
		alert('Please Login First!');
	</script>";
	sleep(2);
	header('Location: login page/signlog.html');
}
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Workbinder</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->



		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/colors/green.css" id="colors">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
<div id="wrapper">


<!-- Header
================================================== -->
<header>
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="index.php"><img src="images/logo.png" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="index.php">Home</a>

				</li>



				<li><a href="#" >For Candidates</a>
					<ul>
						<li><a href="browse-jobs.php">Browse Jobs</a></li>
						<li><a href="add-resume.php">Add Payment</a></li>

					</ul>
				</li>

				<li><a href="#">For Employers</a>
					<ul>
						<li><a href="add-job.php">Add Job</a></li>
						<li><a href="manage-jobs.php">Manage Jobs</a></li>

					</ul>
				</li>


			</ul>


			<ul class="responsive float-right">
				<li class="btn-cta" >
					<a href="index.php" id="current">Logout</a>
						 </div>
				</li>
			</ul>

			<li><a href="ajax/todo-app/index.html">Admin</a>

			</li>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span>Get what you want:</span>
			<h2>Web, Design, Mobile, Tuition etc.</h2>
		</div>

		<div class="six columns">
			<a href="add-job.html" class="button">Post a Job, It’s Free!</a>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
		<!-- <div class="padding-right"> -->
			<!-- <div class="clearfix"></div> -->
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="search_text" id="search_text" placeholder="Search Jobs" class="fa-search" />
						<button id = "show_all" class = "button big margin-top-5"> Show All</button>&nbsp; &nbsp;

						<button id = "hide" class = "button big margin-top-5"> Hide All</button>
					</div>
				</div>
		</div>
	</div>
	<div id="result"></div>
</div>

<div style="clear:both"></div>





<!-- Scripts
================================================== -->
<script src="scripts/jquery-2.1.3.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>





</body>
</html>

<script>
$(document).ready(function(){
	/*load_data();*/
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else {
			$('#result').html('');
		}

	});
	$('#show_all').click(function(e){
		load_data();
	});
	$('#hide').click(function(e){
		$('#result').html('');
	});
});
</script>
