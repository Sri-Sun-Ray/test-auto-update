<?php

$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFile = $targetDir . $fileName;

if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    echo "File uploaded successfully!";
} else {
    echo "Upload failed!";
}

echo "<br><a href='index.php'>Go Back</a>";