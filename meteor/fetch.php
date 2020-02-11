<?php
$connect = mysqli_connect("localhost", "root", "", "workbinder");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM jobs
	WHERE jobTitle LIKE '%".$search."%'
	OR location LIKE '%".$search."%'
	OR jobTag LIKE '%".$search."%'
	OR contact LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM jobs ORDER BY jobID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="card">
    				<div class="card-body">

						<table id="datatableid" class="table table-bordered table-dark">
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
						</tr>
						';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["jobID"].'</td>
				<td>'.$row["jobTitle"].'</td>
				<td>'.$row["category"].'</td>
				<td>'.$row["location"].'</td>
				<td>'.$row["jobTag"].'</td>
				<td>'.$row["budget"].'</td>
				<td>'.$row["jobDetails"].'</td>
				<td>'.$row["delivery"].'</td>
				<td>'.$row["contact"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
