<!DOCTYPE html>
<html>
<head>
<title> Admin Login </title>

 

 <link rel = "stylesheet" type = "text/css" href="css/admin_login_style.css">

 

</head>

 

<body>

 

<header>

 

<main>

 

<form method="POST">
        <div class="box">
            <div class="one">

 

        <input type="text" name="username" required><br>
        <label> Username </label>

 

            </div>

    <div class="one">

        <input type="password" name="password" required><br>
        <label> Password </label>

 

    </div>

 

</div>

        <input type="submit" class="btntwo" name="submit" value="Login"/>
        
</form>

    <section>
        <h1 class="title"> Admin Login </h1>
        <h2 class="two"> to go back to main page </h2>
        <h2 class="two">  </h2>
     
        
        <a href = 'http://localhost:8080/fashion_main/mainpage.php#' class="back"> Click here  </a>
    </section>

 

</main>

</header>

</body>

</html>


<?php

 

include 'connection.php';
    
    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $username_search="select * from Admin where username='$username'";
        $query=mysqli_query($con,$username_search);
        
        $username_count= mysqli_num_rows($query);
                
        if(mysqli_num_rows($query)){
            $username_pass = mysqli_fetch_assoc($query);
            
            $db_pass = $username_pass['password'];
            
            if($db_pass==$password){
                echo "login successful";
                ?>
                    <script>
                        location.replace("admin_home.php");
                    </script>
                <?php
            }else {
                 ?><script>
                        alert('password incorrect');
                    </script>
                <?php
            }
            
    }
        else{
            ?> <script>
                    alert('Invalid username');
               </script>
            <?php
        }
                    }
 

?>
