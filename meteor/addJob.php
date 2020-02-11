<?php

    $title = $_POST['title'];
    $cat = $_POST['category'];
    $loc = $_POST['loc'];
    $tag = $_POST['tags'];
    $budget = $_POST['budget'];
    $details = $_POST['details'];
    $dod = $_POST['date'];
    $cont = $_POST['email'];

    $conn = new mysqli('localhost','root','','workbinder');


    if ($conn->connect_error) {
	    die('Connection failed: ' . $conn->connect_error);
	}

    else {
       /* $stmnt = $conn->prepare("insert into jobs values ('title','category','loc','tags','budget','details','date','email') values (?,?,?,?,?,?,?)");
        $stmnt->bind_param("ssssisss", $title,$cat,$loc,$tag,$budget,$details,$dod,$cont);
        $stmnt->execute();
        echo "Successful";
        $stmnt->close();
        $conn->close();*/
    $sql = "insert into jobs(`jobID`, `jobTitle`, `category`, `location`, `jobTag`, `budget`, `jobDetails`, `delivery`, `contact`) VALUES ('','$title','$cat','$loc','$tag','$budget','$details','$dod','$cont')";


    //if($query_run)
    /*{
        echo "Data Saved";
        header('Location: addJob.php');
    }
    else
    {
        echo "Data Not Saved";
    }*/
    if($conn->query($sql))
    {
        echo '<script> alert("Job is posted Successfully! Check it on Manage Jobs"); </script>';

    }
    else
    {
        echo '<script> alert("Sorry, Posting was not Successful"); </script>';
    }
}

?>
