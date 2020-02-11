<?php
    $title = $_POST['title'];
    $company = $_POST['company'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $mail = $_POST['email'];
    $delivery = $_POST['date'];
    $payment = $_POST['salary'];

    if (!empty($title) || !empty($company) || !empty($category) || !empty($email) || !empty($description) || !empty($delivery) || !empty($payment))
     {
        $con = mysqli_connect('127.0.0.1','root','');
        if(!$con)
        {
            echo "not connected to server";
        }
        if(!mysqli_select_db($con,'Workbinder'))
        {
            echo "db not selected";
        }

         $sql = "INSERT INTO project (title,company,mail,category,description,delivery, payment)
         VALUES('$title','$company','$mail','$category','$description','$delivery','$payment')";

          if(mysqli_query($con, $sql))
            {
              echo "New record inserted sucessfully";
            }
         else {
          echo "Not Posted Properly";
         }
         $con->close();
        }
    else {
     echo "All field are required";
     die();
    }
?>
