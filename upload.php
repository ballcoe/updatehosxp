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
      echo "Error!!, please upload *.exe or *.msi file";
  }
  else{
    if(!empty($_FILES['uploaded_file']))
    {
      $path = "uploads/";
      $path = $path . basename( $_FILES['uploaded_file']['name']);
      if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
        echo "The file ".  basename( $_FILES['uploaded_file']['name']).
        " has been uploaded";
      } else{
        echo "There was an error uploading the file, please try again!";
      }
   }
  }
  echo "<br>";
  echo "Refresh Your Browser if you want to upload again.";
  ?>
  </center>
</body>
</html>
