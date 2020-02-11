
<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title>Work Scout</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" id="colors">



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

				<li><a href="#">Pages</a>
					<ul>
						<li><a href="job-page.html">Job Page</a></li>
						<li><a href="job-page-alt.html">Job Page Alternative</a></li>
						<li><a href="resume-page.html">Resume Page</a></li>
						<li><a href="shortcodes.html">Shortcodes</a></li>
						<li><a href="pricing-tables.html">Pricing Tables</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</li>

				<li><a href="#">For Candidates</a>
					<ul>
						<li><a href="browse-jobs.php">Browse Jobs</a></li>
						<li><a href="add-resume.php">Add Payment</a></li>

					</ul>
				</li>

				<li><a href="#" >For Employers</a>
					<ul>
						<li><a href="add-job.php">Add Job</a></li>
						<li><a href="manage-jobs.php">Manage Jobs</a></li>
					</ul>
				</li>

				<li><a href="ajax/todo-app/index.html">Admin</a>

				<li><a href="react-stars-master/example/index.html">Rating</a>


			</ul>


			<ul class="responsive float-right">
				<li class="btn-cta" >
					<a href="index.php" id="current">Logout</a>
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


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h2><i class="fa fa-plus-circle"></i> Add Job</h2>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Submit Page -->
	<form action = "addJob.php" method="post">

	<div class="sixteen columns">
		<div class="submit-page">

			<!-- Notice -->
			<div class="notification notice closeable margin-bottom-40">
				<p><span>Have an account?</span> If you don’t have an account you can create one below by entering your email address. A password will be automatically emailed to you.</p>
			</div>

			<!-- Title -->
			<div class="form">
				<h5>Job Title</h5>
				<input class="search-field" type="text" name = "title" placeholder="Web Development" value=""/>
			</div>
			<!-- Choose Category -->
				<div class="select">
					<h5>Category</h5>
					<select data-placeholder="Choose Categories" name="category" class="chosen-select" multiple>
						<option value="Web">Web Development</option>
							<option value="Mobile">Mobile Development</option>
							<option value="Design">Designing</option>
							<option value="Writing">Writing</option>
							<option value="Presentation">Presentation</option>
							<option value="Tuition">Tuition</option>
							<option value="Form-Filling">Form Fillup</option>
							<option value="Craft-Quill">Crafting</option>
					</select>
				</div>


			<!-- Location -->
			<div class="form">
				<h5>Location <span>(optional)</span></h5>
				<input class="search-field" type="text" name="loc" placeholder="e.g. London" value=""/>
				<p class="note">Leave this blank if the location is not important</p>
			</div>

			<!-- Tags -->
			<div class="form">
				<h5>Job Tags <span>(optional)</span></h5>
				<input class="search-field" name="tags" type="text" placeholder="e.g. PHP, Social Media, Management" value=""/>
				<p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
			</div>

			<div class="form">
				<h5>Budget(In Taka)</h5>
				<input class="search-field" name="budget" type="number" placeholder="1500" value=""/>
			</div>


			<!-- Description -->
			<div class="form">
				<h5>Description</h5>
				<textarea class="WYSIWYG" name="details" cols="40" rows="3" spellcheck="true"></textarea>
			</div>

			<!-- TClosing Date -->
			<div class="form">
				<h5>Closing Date <span>(optional)</span></h5>
				<input data-role="date" name="date" type="text" placeholder="yyyy-mm-dd">
				<p class="note">Deadline for new applicants.</p>
			</div>

			<!-- Email -->
			<div class="form">
				<h5>Your Email</h5>
				<input class="search-field" name="email" type="text" placeholder="mail@example.com" value=""/>
			</div>


			<!-- Company Details -->
				<div class="divider"><h3>Company Details</h3></div>

			<!-- Company Name -->
			<div class="form">
				<h5>Company Name</h5>
				<input type="text" placeholder="Enter the name of the company">
			</div>

			<!-- Website -->
			<div class="form">
				<h5>Website <span>(optional)</span></h5>
				<input type="text" placeholder="http://">
			</div>

			<!-- Logo -->
			<div class="form">
				<h5>Logo <span>(optional)</span></h5>
				<label class="upload-btn">
				    <input type="file" multiple />
				    <i class="fa fa-upload"></i> Browse
				</label>
				<span class="fake-input">No file selected</span>
			</div>


				<div class="divider margin-top-0"></div>
				<button type="submit" name="insertdata" class="button big margin-top-5"> Post <i class="fa fa-arrow-circle-right"></i></button>

		</div>
	</div>
	</form>
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
