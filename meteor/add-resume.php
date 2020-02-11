

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
<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="css/colors/green.css" id="colors"> -->

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



				<li><a href="#">For Candidates</a>
					<ul>
						<li><a href="browse-jobs.php">Browse Jobs</a></li>
						<li><a href="add-resume.php">Add Resume</a></li>

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
					<a href="index.html" id="current">Logout</a>
						 </div>
				</li>
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>





<!-- Content
================================================== -->
<div class="container">

	<!-- Submit Page -->
	<div class="sixteen columns">
		<div class="submit-page">

			<!-- Notice -->
			<div class="notification notice closeable margin-bottom-40">
				<p><span>Have an account?</span> If you don’t have an account you can create one below by entering your email address. A password will be automatically emailed to you.</p>
			</div>


			<!-- Linked In -->
			<div class="form">
				<h5>Payment</h5>
				<a href="#" class="button linkedin-btn"></a>
			</div>

			<!-- Email -->
			<div class="form">
				<h5>Your Name</h5>
				<input class="search-field" type="text" placeholder="Your full name" value=""/>
			</div>

			<!-- Email -->
			<div class="form">
				<h5>Your Email</h5>
				<input class="search-field" type="text" placeholder="mail@example.com" value=""/>
			</div>

			<!-- Title -->
			<div class="form">
				<h5>Professional Title</h5>
				<input class="search-field" type="text" placeholder="e.g. Web Developer" value=""/>
			</div>

			<!-- Location -->
			<div class="form">
				<h5>Location</h5>
				<input class="search-field" type="text" placeholder="e.g. London, UK" value=""/>
			</div>

			<!-- Logo -->
			<div class="form">
				<h5>Photo <span>(optional)</span></h5>
				<label class="upload-btn">
				    <input type="file" multiple />
				    <i class="fa fa-upload"></i> Browse
				</label>
				<span class="fake-input">No file selected</span>
			</div>

			<!-- Email -->
			<div class="form">
				<h5>Video <span>(optional)</span></h5>
				<input class="search-field" type="text" placeholder="A link to a video about you" value=""/>
			</div>

			<!-- Description -->
			<div class="form">
				<h5>Resume Content</h5>
				<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>


			<!-- Add URLs -->
			<div class="form with-line">
				<h5>URL(s) <span>(optional)</span></h5>
				<div class="form-inside">

					<!-- Adding URL(s) -->
					<div class="form boxed box-to-clone url-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input class="search-field" type="text" placeholder="Name" value=""/>
						<input class="search-field" type="text" placeholder="http://" value=""/>
					</div>

					<a href="#" class="button gray add-url add-box"><i class="fa fa-plus-circle"></i> Add URL</a>
					<p class="note">Optionally provide links to any of your websites or social network profiles.</p>
				</div>
			</div>


			<!-- Education -->
			<div class="form with-line">
				<h5>Education <span>(optional)</span></h5>
				<div class="form-inside">

					<!-- Add Education -->
					<div class="form boxed box-to-clone education-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input class="search-field" type="text" placeholder="School Name" value=""/>
						<input class="search-field" type="text" placeholder="Qualification(s)" value=""/>
						<input class="search-field" type="text" placeholder="Start / end date" value=""/>
						<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
					</div>

					<a href="#" class="button gray add-education add-box"><i class="fa fa-plus-circle"></i> Add Education</a>
				</div>
			</div>


			<!-- Experience  -->
			<div class="form with-line">
				<h5>Experience <span>(optional)</span></h5>
				<div class="form-inside">

					<!-- Add Experience -->
					<div class="form boxed box-to-clone experience-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input class="search-field" type="text" placeholder="Employer" value=""/>
						<input class="search-field" type="text" placeholder="Job Title" value=""/>
						<input class="search-field" type="text" placeholder="Start / end date" value=""/>
						<textarea name="desc1" id="desc1" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
					</div>

					<a href="#" class="button gray add-experience add-box"><i class="fa fa-plus-circle"></i> Add Experience</a>
				</div>
			</div>


			<div class="divider margin-top-0 padding-reset"></div>
			<a href="#" class="button big margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></a>

		</div>
	</div>

</div>





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


<!-- WYSIWYG Editor -->
<script type="text/javascript" src="scripts/jquery.sceditor.bbcode.min.js"></script>
<script type="text/javascript" src="scripts/jquery.sceditor.js"></script>



</body>
</html>
