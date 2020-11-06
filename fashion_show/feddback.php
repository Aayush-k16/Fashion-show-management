<!DOCTYPE html>
<html>
<head>
<title> Feedback </title>

 <link rel = "stylesheet" type = "text/css" href="css/feedbackstyle.css">

</head>

<body>

<header>

<main>

<form method="POST">
        <div class="box">
            <div class="one">

        <input type="text" name="id" required><br>
        <label> User ID </label>

            </div>


        <div >
            Rating (stars) : <input type = "radio" value="1" name="class"> 1
                             <input type = "radio" value="2" name="class"> 2
                             <input type = "radio" value="3" name="class"> 3
                             <input type = "radio" value="4" name="class"> 4
                             <input type = "radio" value="5" name="class"> 5
        </div>
        <br>

            <div class="one">

        <input type="text" name="comments" required><br>
        <label> Comments </label>

            </div>

           </div>

        <input type="submit" class="btntwo" name="submit" value="Submit"/>
        
</form>

    <section>
        <h1 class="title"> Feedback </h1>
        <h2 class="two"> to go back to main page </h2>
        <h2 class="two">  </h2>

        <h2 class="feed"> Give your valuable feedback for the show </h2>
        
        <a href = 'http://localhost:8080/fashion_main/mainpage.php#' class="back"> Click here  </a>
    </section>

</main>

</header>

</body>

</html>

<?php

include 'connection.php';
    
    if(isset($_POST['submit'])){
        
        $id = $_POST['id'];
        $class = $_POST['class'];
        $comments = $_POST['comments'];
        
        $insertquery="Insert into Feedback (User_id, Ratings, Other_comments) VALUES ('$id', '$class', '$comments')";
        
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
