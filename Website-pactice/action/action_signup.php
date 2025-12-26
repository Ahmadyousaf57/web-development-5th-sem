<?php
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $mobilenumber = $_POST["mobilenumber"];
    $gender = $_POST["gender"];

    $imagename = $_FILES['myimage']['name'];
    $tmpname = $_FILES['myimage']['tmp_name'];
    $imagesize = $_FILES['myimage']['size'];
    $imagetype = pathinfo($imagename, PATHINFO_EXTENSION);
    $allowdtypes = array('jpg', 'jpeg', 'png', 'gif');
    $newimagename = uniqid("img_").".".$imagetype;
    
   
    if(in_array($imagetype, $allowdtypes)){
        if(move_uploaded_file($tmpname, "../images/".$newimagename)){
            $con = mysqli_connect("localhost", "root", "", "dbwebsite5e");
            $qry = "INSERT INTO testing 
            (fullname, email, mobilenumber, gender, imagename)
            VALUES
            ('$fullname', '$email', '$mobilenumber', '$gender', '$newimagename')";

            $res = mysqli_query($con, $qry);

            if(isset($res) && $res != ""){
                header("location: ../signup.php");
            }
            else{
                header("location: ../signup.php");
            }
        }
        else{
            header("location: ../signup.php");
        
        }
    }
    else{
        header("location: ../signup.php");
    }

?>