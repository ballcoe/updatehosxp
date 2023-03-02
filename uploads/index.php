<?php
include "../config.php";
?>
<html>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <head>
                <title>List of Files</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
                <style>
                        table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                        }
                        th{
                                border: 1px solid #dddddd;
                                text-align: center;
                                padding: 8px;
                        }
                        td{
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                        }

                        tr:nth-child(even) {
                                background-color: #f0f0f0;
                        }
                        .updatehos{
                                right:0px;
                                margin:0px auto;
                                margin-top:1%;
                                max-width:800px;
                                position:relative
                        }
                        h2,.h2{
                                margin-top:10px;
                                margin-bottom:10px;
                                text-align: center;
                        }
                        a:link {
                                color: blue;
                        }
                        a:visited {
                                color: blue;
                        }
                </style>
        </head>
        <body>
        <br>
        <div class="updatehos">
        <h2>List of File</h2><br>
        <?php
                $sql = "SELECT * FROM updatehosxp order by Name;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
        ?>
                <table>
                        <tr>
                                <th width="50%">Name</th>
                                <th>Size</th>
                                <th>Date</th>
                                <th>Action</th>
                        </tr>
        <?php
                while($data = mysqli_fetch_object($result)) {
                $sizemb = number_format($data->Size/1048576, 2, '.', '');
        ?>
                        <tr>
                                <td><?php echo $data->Name; ?></td>
                                <td><div align="right"><?php echo $sizemb." MB"; ?></div></td>
                                <td><center><?php echo $data->Date; ?></center></td>
                                <td><center><a href ="<?php echo $data->Name; ?>"> <i class="fa-solid fa-download" title="Download"></i></a>
                                <a href="#" onclick="chkConfirm('<?php echo $data->Name; ?>')"><i class="fa-solid fa-trash" title="Delete"></i></center></td>
                        </tr>
        <?php
                }
        ?></table><?php
        } else {
                echo '<center><font color="red">Do not have any File!!!</font></center>';
        }
        ?>
        <?php
                $conn->close();
        ?>
        </div>
        </body>
        <script language="JavaScript">
        const xhttp =  new XMLHttpRequest();
        function chkConfirm(filename){
                if(confirm("Do you want to delete file ?") == true){
                        xhttp.open("GET","delete.php?filename="+filename,true);
                        xhttp.send();
                        window.location.reload();
                }
        }
        </script>
</html>
