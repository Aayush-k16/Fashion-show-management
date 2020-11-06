<!DOCTYPE html>

 <html>

 <head>

 <title> Designer Details </title>


<link rel = "stylesheet" type = "text/css" href="css/designerstyle.css">


</head>



<body>



<header>



<main>

<section>

    <h1 class="title"> Designer Details </h1>
    <h2 class="inst"> *(Create a unique Designer ID for all further communications) </h2>

</section>


<form action="" method="post">
<div class="box">
 <div class="one">

 <input type="text" name="id" required><br>
 <label> Designer ID* </label>

 </div>

 <div class="one">

 <input type="text" name="name" required><br>
 <label> Designer Name </label>

 </div>

 <div class="one">

 <input type="text" name="team" required><br>
 <label> Team Name </label>

 </div>

Date of Birth: <input type="date" class= "cal" name="dob" min="1940-01-01" max="2020-12-31">
    <br></br>

 <div class="one">

 <input type="text" name="experience" required><br>
 <label> Designing experience (in years)</label>
 </div>



 <div class="one">

 <input type="text" name="college" required><br>
 <label> College Attended </label>

 </div>

 <div class="one">

 <input type="text" name="contact" required><br>
 <label> Contact Number </label>

 </div>

 <div class="one">

 <input type="text" name="email" required><br>
 <label> E-mail </label>

 </div>

 <div class="one">
 
 <input type="text" name="city" required><br>
 <label> City (Mumbai/Delhi/Bangalore/Kolkata</label>

 </div>
 </div>
    
    <input type="submit" class="btntwo" name="submit" value="Register"/>
               
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
                    $team = $_POST['team'];
                    $dob = $_POST['dob'];
                    $experience = $_POST['experience'];
                    $college = $_POST['college'];
                    $contact = $_POST['contact'];
                    $email = $_POST['email'];
                    $city = $_POST['city'];
               
               $insertquery = "INSERT INTO Desginer_details(Designer_id, Name, Date_of_birth, Contact_number, Email, Experience, College_attended, Team_name, City) VALUES ('$id', '$name', '$dob', '$contact', '$email', '$experience', '$college', '$team', '$city')";
               
               echo  $insertquery;
               
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
