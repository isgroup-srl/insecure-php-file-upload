<?php

$target_dir = './';

if (isset($_POST["submit"])) {
	$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);

	if (file_exists($target_file)) {
		die("Sorry, file already exists.");
	}

	if ($_FILES["fileToUpload"]["size"] > 500000) {
		die("Sorry, your file is too large.");
	}

	if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		die("Sorry, there was an error uploading your file.");
	}

	echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
}
