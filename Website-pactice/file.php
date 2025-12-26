<?php
    //  Connecting to SERVER
    // 4 Parameters: SERVER_NAME, USERNAME, PASSWORD, DB_NAME
    $con = mysqli_connect("localhost", "root", "", "dbwebsite5e");

    $qry = "INSERT INTO testing 
    (fullname, email, mobilenumber, gender)
    VALUES
    ('M Ahmad', 'ahmad@test.com', '123123123', 'M')";

    // 2 Parameters: CONNECTION_DETAILS, QUERY
    $res = mysqli_query($con, $qry);

    if(isset($res) && $res != ""){
        echo "Success";
    }
    else{
        echo "Some error occured";
    }
?>