<?php
include "../config.php";

$filename = $_GET['filename'];
$sqldeletefile = "delete from updatehosxp where Name = '$filename'";
$resdeletefile = $conn->query($sqldeletefile);
unlink($filename);
?>
