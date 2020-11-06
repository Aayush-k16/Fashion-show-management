<!DOCTYPE html>

 <html>

 <head>

 <title> Sponsor Details </title>
 
 <link rel = "stylesheet" type = "text/css" href="css/sponsor_style.css">


 </head>
 
<body>
 
<header>
 
<main>
 
    <section>

     <h1 class="title"> Sponsor Details </h1>

    <h2 class="note"> Note: Every team can have a maximum of one sponsor </h2>

     <a href = 'http://localhost:8080/fashion_main/attire.php' class="btntwo"> Next Page</a>

    </section>
          
    <form action="" method="POST">
  
        <div class="box">
        <div class="one">
        <input type="text" name="id" required> <br>
        <label> Transaction ID </label>
        </div>

        <div class="one">
        <input type="text" name="name" required> <br>
        <label> Name </label>
        </div>

        <div class="one">
        <input type="text" name="team" required> <br>
        <label> Team Name </label>
        </div>

        <div class="one">
        <input type="text" name="amount" required> <br>
        <label> Amount </label>
        </div>
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
        $amount = $_POST['amount'];
        
        $insertquery = "Insert into Sponsor_details(Sponsored_team, Name_of_sponsor, Transaction_id, Sponsorship_Amount) VALUES ('$team', '$name', '$id', '$amount')";
        
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
