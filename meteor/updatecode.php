<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'workbinder');

    if(isset($_POST['updatedata']))
    {
        $id = $_POST['update_id'];

            $title = $_POST['title'];
            $cat = $_POST['category'];
            $loc = $_POST['location'];
            $tag = $_POST['tags'];
            $budget = $_POST['budget'];
            $details = $_POST['details'];
            $dod = $_POST['date'];
            $cont = $_POST['email'];

        $query = "UPDATE jobs SET jobTitle = '$title', category = '$cat', location = '$loc', jobTag = '$tag', budget = '$budget',jobDetails = '$details', delivery = '$dod', contact = '$cont' WHERE jobID='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:manage-jobs.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
