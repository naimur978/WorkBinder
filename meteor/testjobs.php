<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->

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
			<h1><a href="index.html"><img src="images/logo.png" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="index.html">Home</a>

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
						<li><a href="add-resume.php">Add Resume</a></li>

					</ul>
				</li>

				<li><a href="#" id="current">For Employers</a>
					<ul>
						<li><a href="testjobs.php">Add Job</a></li>
						<li><a href="manage-jobs.php">Manage Jobs</a></li>
					</ul>
				</li>

				<li><a href="blog.html">Blog</a></li>
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


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Manage Jobs</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>Job Dashboard</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<!-- <div class="container">


	<div class="sixteen columns"> -->

<!-- UPDATE DATA -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form action="updatecode.php" method="POST">

            <div class="modal-body">

                <input type="hidden" name="update_id" id="update_id">

                <div class="form-group">
                    <label> Title </label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter First Name">
                </div>

                <div class="form-group">
                	<div class="select">
						<h5>Category</h5>
						<select data-placeholder="Choose Categories" type= "text" name="category" id = "category"  class="form-control" class="chosen-select" multiple>
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


	                <div class="form-group">
	                    <label> Location </label>
	                    <input type="text" name="location" id="location" class="form-control" placeholder="e.g london">
	                </div>

	                <div class="form-group">
	                    <label> Tags </label>
	                    <input type="text" name="tags" id="tags" class="form-control" placeholder="e.g php, java">
	                </div>

	                <div class="form-group">
	                    <label> Budget </label>
	                    <input type="number" name="budget" id="budget" class="form-control" placeholder="3000">
	                </div>

	                <div class="form-group">
	                    <label> Description </label>
	                    <input type="text" name="details" id="details" class="form-control" placeholder="">
	                </div>

	                <div class="form-group">
	                    <label> Delivery Date </label>
	                    <input type="text" name="date" id="date" class="form-control" placeholder="yyyy-mm-dd">
	                </div>

	                <div class="form-group">
	                    <label> E-mail </label>
	                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter E-mail">
	                </div>


            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
	            </div>
        </div>
    </form>

    </div>
  </div>
</div>


<!-- DELETE DATA -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="deletecode.php" method="POST">

            <div class="modal-body">

                <input type="hidden" name="delete_id" id="delete_id">

                <h4> Do you want to Delete this Data ??</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">  NO </button>
                <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
            </div>
        </form>

    </div>
  </div>
</div>


<div class="card">
    <div class="card-body">

		<?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'workbinder');

                $query = "SELECT * FROM jobs";
                $query_run = mysqli_query($connection, $query);
        ?>

		<p class="margin-bottom-25">Your listings are shown in the table below. Expired listings will be automatically removed after 30 days.</p>



		<!-- <table id="datatableid" class="manage-table responsive-table"> -->
		<table id="datatableid" class="table table-bordered table-dark">

			<thead>
                        <tr>
                            <th scope="col"> ID</th>
                            <th scope="col"> Title</th>
                            <th scope="col"> Category </th>
                            <th scope="col"> Location </th>
                            <th scope="col"> Tags </th>
                            <th scope="col"> Budget </th>
                            <th scope="col"> Details </th>
                            <th scope="col"> Delivery Date </th>
                            <th scope="col"> E-mail </th>
                            <th scope="col">  </th>
                            <th scope="col">  </th>
                        </tr>
            </thead>
			<!-- <tr>
				<th><i class="fa fa-file-text"></i> Title</th>
				<th><i class="fa fa-check-square-o"></i> Filled?</th>
				<th><i class="fa fa-calendar"></i> Date Posted</th>
				<th><i class="fa fa-calendar"></i> Date Expires</th>
				<th><i class="fa fa-user"></i> Applications</th>
				<th></th>
			</tr> -->

			<?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>

			<!-- Item #1 -->

					<tbody>
                        <tr>
                            <td> <?php echo $row['jobID']; ?> </td>
                            <td> <?php echo $row['jobTitle']; ?> </td>
                            <td> <?php echo $row['category']; ?> </td>
                            <td> <?php echo $row['location']; ?> </td>
                            <td> <?php echo $row['jobTag']; ?> </td>
                            <td> <?php echo $row['budget']; ?> </td>
                            <td> <?php echo $row['jobDetails']; ?> </td>
                            <td> <?php echo $row['delivery']; ?> </td>
                            <td> <?php echo $row['contact']; ?> </td>
                            <td>
                                <button type="button" class="btn btn-success editbtn"> EDIT </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                            </td>
                        </tr>
                    </tbody>

                <?php
	                    }
	                }
	                else
	                {
	                    echo "No Record Found";
	                }
            	?>

			<!-- <tr>
				<td class="title"><a href="#">Marketing Coordinator - SEO / SEM Experience <span class="pending">(Pending Approval)</span></a></td>
				<td class="centered">-</td>
				<td>September 30, 2015</td>
				<td>October 10, 2015</td>
				<td class="centered">-</td>
				<td class="action">
					<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
				</td>
			</tr>
-->

		</table>

		<br>
		<a href="add-job.html" class="button">Add Job</a>

	</div>

</div>




<!-- Footer
================================================== -->
<div class="margin-top-60"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>About</h4>
			<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			<a href="#" class="button">Get Started</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Our Blog</a></li>
				<li><a href="#">Terms of Service</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Hiring Hub</a></li>
			</ul>
		</div>

		<div class="three columns">
			<h4>Press</h4>
			<ul class="footer-links">
				<li><a href="#">In the News</a></li>
				<li><a href="#">Press Releases</a></li>
				<li><a href="#">Awards</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Timeline</a></li>
			</ul>
		</div>

		<div class="three columns">
			<h4>Browse</h4>
			<ul class="footer-links">
				<li><a href="#">Freelancers by Category</a></li>
				<li><a href="#">Freelancers in USA</a></li>
				<li><a href="#">Freelancers in UK</a></li>
				<li><a href="#">Freelancers in Canada</a></li>
				<li><a href="#">Freelancers in Australia</a></li>
				<li><a href="#">Find Jobs</a></li>

			</ul>
		</div>

	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">©  Copyright 2015 by <a href="#">Work Scout</a>. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


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
<script src="scripts/stacktable.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>


<script>

$(document).ready(function () {

    $('.deletebtn').on('click', function() {

        $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);

    });
});

</script>



<script>

$(document).ready(function () {
    $('.editbtn').on('click', function() {

        $('#editmodal').modal('show');


            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#title').val(data[1]);
            $('#category').val(data[2]);
            $('#location').val(data[3]);
            $('#tags').val(data[4]);
            $('#budget').val(data[5]);
            $('#details').val(data[6]);
            $('#delivery').val(data[7]);
            $('#contact').val(data[8]);

    });
});

</script>


</body>
</html>
