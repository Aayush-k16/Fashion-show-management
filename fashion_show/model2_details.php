<!DOCTYPE html>
<html>
<head>
<title> Model Details </title>

 
<link rel = "stylesheet" type = "text/css" href="css/model2_style.css">


</head>

 

<body>

 

<header>

 

<main>

 

    <section>

    <h1 class="title"> Model Details </h1>

    <a href = 'http://localhost:8080/fashion_main/model3_details.php' class="btntwo"> Next Page</a>

    </section>

 
    
    <form action="" method="POST">
        <div class = "box">

        <h1 class="modtwo"> Model 2 </h1>
        
        <div class="one">
        <input type="text" name="id" required><br>
        <label> Model ID </label>
        </div>

        <div class="one">
        <input type="text" name="name" required><br>
        <label> Name </label>
        </div>

        <div class="one">
        <input type="text" name="team" required><br>
        <label> Team Name </label>
        </div>

        <div class="one">
        <input type="text" name="age" required><br>
        <label> Age </label>
        </div>

        
        Gender: <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female" > Female <br> </br>
        
        

        <div class="one">
        <input type="text" name="height" required><br>
        <label> Height </label>
        </div>

Last Rampwalk: <input type="date" name="ramp" class: "cal" min="2014-01-01" max="2020-12-31">
    
    </div>
    
    <input type="submit" class="btntwo" name="submit" value="Save"/>

</form>
</main>

</header>

</body>

</html>

<?php

include 'connection.php';
    
    if(isset($_POST['submit'])){
    
         $id = $_POST['id'];
         $name = $_POST['name'];
         $team = $_POST['team'];
         $ramp = $_POST['ramp'];
         $height = $_POST['height'];
         $gender = $_POST['gender'];
         $age = $_POST['age'];
        
    $insertquery = "INSERT INTO Model_details(Model_id, Name, Gender, Age, Height, Team_name, Last_rampwalk) VALUES ('$id', '$name', '$gender', '$age', '$height', '$team', '$ramp')";
        
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
