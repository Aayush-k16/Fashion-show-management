<!DOCTYPE html>
<html>
<head>
<title> Attire </title>

 <link rel = "stylesheet" type = "text/css" href="css/attire_style.css">


</head>

 

<body>

 

<header>

 

<main>

 

    <section>
    <h1 class="title"> Attire </h1>

    <h2 class="two"> to go back to main page </h2>

    <a href = 'http://localhost:8080/fashion_main/mainpage.php#' class="back"> Click here  </a>

    <form method="POST">

        <div class="box">

            <div class="one">
            <input type="text" name="name" required><br>
            <label> Name of Collection </label>
            </div>

            <div class="one">
            <input type="text" name="team" required><br>
            <label> Team Name </label>
            </div>

            <div class="one">
            <input type="text" name="clothing" required><br>
            <label> Clothing </label>
            </div>
            

            Usage of props: <input type="radio" name="props" value="Yes"> Yes
                            <input type="radio" name="props" value="No"> No
            <br></br>

            Walk in pair: <input type="radio" name="pair" value="Yes" > Yes
                          <input type="radio" name="pair" value="No"> No
            <br> </br>

        <input type="submit" class="btntwo" name="submit" value="Submit"/>

</form>
</div>
</main>

</header>

</body>

</html>

<?php

include 'connection.php';
    
    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $team = $_POST['team'];
        $clothing = $_POST['clothing'];
        $props = $_POST['props'];
        $pair = $_POST['pair'];
        
        $insertquery="Insert into Attire_details(Name_of_collection, Team_name, Clothing, Usage_of_props, Pair) VALUES ('$name', '$team', '$clothing', '$props', '$pair')";
        
        echo $insertquery;
        
        $res = mysqli_query($con,$insertquery);
        
        if($res){
            ?>
        <script>
            alert("data inserted properly");
        </script>
        <?php
            }else {
                ?>
                <script>
                    alert("data not inserted");
                </script>
                <?php
            }
    }

?>
