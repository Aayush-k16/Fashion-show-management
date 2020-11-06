<!DOCTYPE html>
<html>
<head>
<title> Ticket Sales </title>

<link rel = "stylesheet" type = "text/css" href="css/ticket_style.css">



</head>

 

<body>

 

<header>

 

<main>
    <section>
    <h1 class="title"> Ticket Sales </h1>
    <h2 class="inst"> *(Create a unique User ID for all further communications) </h2>

    <h2 class="two"> to go back to main page </h2>

    <a href = 'http://localhost:8080/fashion_main/mainpage.php#' class="back"> Click here  </a>

    <form action="" method="POST">
        <div class="box">
            <div class="one">

        <input type="text" name="id" required><br>
        <label> User ID* </label>

            </div>

            <div class="one">

        <input type="text" name="name" required><br>
        <label> Name </label>

            </div>


            <div class="one">

        <input type="text" name="contact" required><br>
        <label> Contact Number </label>

            </div>

            <div class="one">

        <input type="text" name="email" required><br>
        <label> Email ID </label>

            </div>

            <div class="one">

        <input type="text" name="city" required><br>
        <label> City (Mumbai/Delhi/Bangalore/Kolkata ) </label>

            </div>

        
        <div class="three">
            Gender : <input type = "radio" name="gender" value="Male" required>Male
                     <input type = "radio" name="gender" value="Female">Female
        </div>
        <br>

        <div class="three">
            Class of seats : <input type = "radio" name="class" value="silver"  required>Silver
                             <input type = "radio" name="class" value="gold" >Gold
                             <input type = "radio" name="class" value="platinum" >Platinum
        </div>
        <br>

        <div class="one">

        <input type="number" name="seats" required><br>
        <label> Number of seats </label>

            </div>
        
        <input type="submit" class="btntwo" name="submit" value="Buy Tickets"/>
        
</form>
</main>

</header>

</body>

</html>

<?php
               
        include "connection.php";
  
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $class = $_POST['class'];
        $seats = $_POST['seats'];
        
        $insertquery = "INSERT INTO Ticket_sales(User_id, Name, Contact_number, Email, Gender, City, Class_of_seats, Number_of_seats) VALUES ('$id','$name','$contact','$email','$gender','$city','$class',$seats)";
        
        $res = mysqli_query($con,$insertquery);
        
        if($res){
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
