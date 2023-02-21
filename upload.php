<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title> ระบบปรับปรุงเวอร์ชั่นโปรแกรม HosXP </title>
  <link href="./src/jquery-filestyle.min.css" rel="stylesheet" />
                <style>
                        body {
                                font-family: sans-serif;
                        }
                        form label {
                                width: 150px;
                                display: inline-block;
                        }
                </style>
</head>
<body>
  <center>
  <?PHP
  $allowed =  array('exe','msi');
  $filename = $_FILES['uploaded_file']['name'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  if(!in_array($ext,$allowed) ) {
      echo "<font color = 'red'>Error!!, please upload *.exe or *.msi file</font>";
  }
  else{
     $sqlcheckname = "select * from updatehosxp where Name = '$filename'";
     $rescheckname = $conn->query($sqlcheckname);
     $rowcheckname = mysqli_fetch_row($rescheckname);
     if($rowcheckname[0] == NULL){
      if(!empty($_FILES['uploaded_file']))
      {
      $path = "uploads/";
      $path = $path . basename( $_FILES['uploaded_file']['name']);
        if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
          $name = $_FILES['uploaded_file']['name'];
          $size = $_FILES['uploaded_file']['size'];
          $sqlinsert = "INSERT into updatehosxp (Name , Size , Date) value ('$name' , '$size' , NOW())";
          //echo $sqlinsert;
          $res = $conn->query($sqlinsert);
          echo "The file ".  basename( $_FILES['uploaded_file']['name']).
          " has been uploaded";
        }
        else {
          echo "<font color = 'red'>There was an error uploading the file, please try again!</font>";
        }
       }
    } else{
        echo "<font color = 'red'>There was an error uploading the file, the file have been upload!</font>";
    }
  }
  echo "<br>";
  echo "Refresh Your Browser if you want to upload again.";
  ?>
  </center>
</body>
</html>
