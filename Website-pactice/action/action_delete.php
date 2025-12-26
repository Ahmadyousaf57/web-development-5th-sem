<?php
    $id = $_GET['id']; 
    $con = mysqli_connect("localhost", "root", "", "dbwebsite5e");
    $qry = "DELETE FROM testing WHERE id = '$id'";

    $res = mysqli_query($con, $qry);

        if(isset($res) && $res != ""){
               header("location: ../showrecords.php");
        }
        else{
            header("location: ../showrecords.php");
        }
?>