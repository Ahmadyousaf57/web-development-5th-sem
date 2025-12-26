<?php
$con = mysqli_connect("localhost", "root", "", "dbwebsite5e");

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$mobilenumber = $_POST['mobilenumber'];
$gender = $_POST['gender'];

// Check if a new image is uploaded
if (!empty($_FILES['myimage']['name'])) {
    $imagename = $_FILES['myimage']['name'];
    $tmpname = $_FILES['myimage']['tmp_name'];
    $imagetype = pathinfo($imagename, PATHINFO_EXTENSION);

    $newimagename = uniqid("img_") . "." . $imagetype;
    $allowdtypes = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($imagetype, $allowdtypes)) {
        move_uploaded_file($tmpname, "../images/" . $newimagename);

        // Update with new image
        $qry = "UPDATE testing SET 
                fullname='$fullname', 
                email='$email', 
                mobilenumber='$mobilenumber', 
                gender='$gender', 
                imagename='$newimagename' 
                WHERE id='$id'";
    }
} else {
    // Update without changing image
    $qry = "UPDATE testing SET 
            fullname='$fullname', 
            email='$email', 
            mobilenumber='$mobilenumber', 
            gender='$gender' 
            WHERE id='$id'";
}

$res = mysqli_query($con, $qry);

if ($res) {
    header("location: ../showrecords.php");
} else {
    echo "Error updating record!";
}
?>