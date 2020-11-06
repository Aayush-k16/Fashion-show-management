<!DOCTYPE html>
<html>
<head>
<title> Admin </title>
 
<link rel = "stylesheet" type = "text/css" href="css/admin_fashion_style.css">

</head>

<body>

<header>

<main>

    <section>
    
    <h1 class = "title"> Add Fashion Show </h1>
    
    </section>

    <form action="" method="post">
        <div class = "box">

      
        <div class="one">
        <input type="text" name="city" required><br>
        <label> City </label>
        </div>

 

        <div>
        Date Of Show: <input type="date" name="date" required><br>
        </div>
    <br></br>

 

        <div class="one">
        <input type="text" name="contact" required><br>
        <label> Contact Number </label>
        </div>

 

        <div class="one">
        <input type="text" name="email" required><br>
        <label> Email </label>
        </div>

        <div class="one">
        <input type="text" name="manager" required><br>
        <label> Manager </label>
        </div>
    
    
    <div class="one">
        <input type="text" name="venue" required><br>
        <label> Venue </label>
        </div>
   
    </div>

 

    <input type="submit" class="btntwo" name="submit" value="Add">
</form>
</main>

 

</header>


</body>

</html>

<?php

 

include "connection.php";
    
    if(isset($_POST['submit'])){
    
         $city = $_POST['city'];
         $date = $_POST['date'];
         $contact = $_POST['contact'];
         $email = $_POST['email'];
         $manager = $_POST['manager'];
         $venue = $_POST['venue'];
         
    $insertquery = "INSERT INTO Fashion_show(City, Date_of_show, Contact_number, Email, Manager, Venue) VALUES ('$city', '$date', '$contact', '$email', '$manager', '$venue')";
        
        echo $insertquery;
            
    $res = mysqli_query($con,$insertquery);
    
    if ($res){
         ?>
    <script>
    alert("data inserted properly");
    </script>
    <?php
    }else{
    ?>
    <script>
    alert("data not inserted");
    </script>
    <?php
    }
    
    }

 

?>
