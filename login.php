<?php
    require('db_conn.php');
    //session_start();

    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password'])))
    {

         session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: welcome.php");}
        else{
            echo "credentials incorrect";
        }
        }
    }
    
    else{
        echo "field can't be empty";
    }



    
?>