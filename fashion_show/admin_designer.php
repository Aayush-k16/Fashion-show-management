<!DOCTYPE html>
<html>
<head>
<title> Admin </title>

<link rel = "stylesheet" type = "text/css" href="css/admin_designer_style.css">



</head>

 

<body>

 

<header>

 

<main>
    <section>
    <h1 class="title"> Add Designer (admin) </h1>

    <form action="" method="POST">
        <div class="box">
            <div class="one">

        <input type="text" name="id" required><br>
        <label> Designer ID </label>

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

        <input type="text" name="team" required><br>
        <label> Team Name </label>

                </div>

            <div class="one">

        <input type="text" name="city" required><br>
        <label> City </label>

            </div>
        
        <input type="submit" class="btntwo" name="submit" value="Add"/>
        
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
        $city = $_POST['city'];
        $team = $_POST['team'];
        
        $insertquery = "INSERT INTO Final_list_designer(Designer_id, Name, Contact_number, Team_name, City) VALUES ('$id','$name','$contact','$team','$city')";
        
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

