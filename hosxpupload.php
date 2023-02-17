<?php
$conn = new mysqli("localhost", "username", "password" , "database");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
		</style>
 </head>

 <body>
  <center>
  <form enctype="multipart/form-data" novalidate="novalidate" action="upload.php" method="POST">
        <input type="file" class="jfilestyle" data-theme="asphalt" name="uploaded_file" data-text="เลือกไฟล์"></input><br>
        <input type="submit" class="button" value="อัพโหลดไฟล์"></input>
	 <br><br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="./src/jquery-filestyle.min.js"></script>
    <script type="text/javascript">
	    $('#uploaded_file').jfilestyle()
    </script>
  </form>
  </center>
 </body>
</html>
