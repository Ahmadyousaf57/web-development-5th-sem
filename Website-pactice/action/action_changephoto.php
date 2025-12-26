<?php
$con = mysqli_connect("localhost", "root", "", "dbwebsite5e");

$id = $_POST['id'];

// Fetch old image name
$qryOld = "SELECT imagename FROM testing WHERE id='$id'";
$resOld = mysqli_query($con, $qryOld);
$rowOld = mysqli_fetch_assoc($resOld);
$oldImage = $rowOld['imagename'];

// Upload new image
if (!empty($_FILES['myimage']['name'])) {
    $imagename = $_FILES['myimage']['name'];
    $tmpname = $_FILES['myimage']['tmp_name'];
    $imagetype = pathinfo($imagename, PATHINFO_EXTENSION);

    $newimagename = uniqid("img_") . "." . $imagetype;
    $allowdtypes = array('jpg', 'jpeg', 'png', 'gif');

    $targetDir = $_SERVER['DOCUMENT_ROOT'] . "/Website5e/images/";

    if (in_array($imagetype, $allowdtypes)) {
        if (move_uploaded_file($tmpname, $targetDir . $newimagename)) {

            // Delete old image file if exists
            if (!empty($oldImage) && file_exists($targetDir . $oldImage)) {
                unlink($targetDir . $oldImage);
            }

            // Update database
            $qry = "UPDATE testing SET imagename='$newimagename' WHERE id='$id'";
            $res = mysqli_query($con, $qry);

            if ($res) {
                header("location: ../showrecords.php");
            } else {
                echo "❌ Error updating photo: " . mysqli_error($con);
            }
        } else {
            echo "❌ Failed to move uploaded file!";
        }
    } else {
        echo "❌ Invalid file type!";
    }
} else {
    echo "❌ No image selected!";
}
?>
