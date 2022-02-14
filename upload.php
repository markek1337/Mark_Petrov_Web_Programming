<?php
$destination = "folder/".basename($_FILES["userfile"] ["name"]);
if (($_FILES["userfile"]["type"] == "image/gif")
    || ($_FILES["userfile"]["type"] == "image/jpeg")
    || ($_FILES["userfile"]["type"] == "image/jpg")
    || ($_FILES["userfile"]["type"] == "image/png")) {

        move_uploaded_file($_FILES["userfile"] ["tmp_name"], $destination);
        echo "The file was successfully uploaded. <br>";
        echo "<a href='folder/'> Click to see uploaded files </a>";
} else if ($_FILES["userfile"]["size"] > 200000){
    echo "Unable to upload file";
} else {
    echo "Unable to upload a file. Only GIF, JPEG, JPG and PNG are acceptable.";
}
?>