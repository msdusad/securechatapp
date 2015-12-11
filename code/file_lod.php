<?php
$fileName = $_FILES["attachment"]["name"]; // The file name
$fileTmpLoc = $_FILES["attachment"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["attachment"]["type"]; // The type of file it is
$fileSize = $_FILES["attachment"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["attachment"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "../message_files/$fileName")){
    echo "$fileName upload is complete";
} else {
    echo "move_uploaded_file function failed";
}
?>