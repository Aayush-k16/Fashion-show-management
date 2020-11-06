<?php

 

$username = "root";
$password = "";
$server = 'localhost';
$db = 'Fashion_show';

 

$con = mysqli_connect($server, $username, $password, $db);

 

if($con){
    //echo "Connection Successful";
    ?>

 

    <script>
    alert('connection success')
    </script>
    <?php
}else{
    //echo " NO Connection";
   die("no connection" . mysqli_connect_error());
}
