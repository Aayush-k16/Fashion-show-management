<!DOCTYPE html>
<html>
<head>
<title> Final List </title>

<link rel = "stylesheet" type = "text/css" href="css/designer_show_style.css">

</head>

<body>
    
    <div class="box">
        <div class="one">
            <form method="POST">
                <input type= "text" name="id">
                <label> Designer ID </label>
        </div>
                <input type="submit" name="search" value="Search" required>
            </form>
    </div>
    

    
    <div class="main-div">
        <h1> YOUR APPLICATION DETAILS </h1>
            <div class="center-div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th> Designer_id </th>
                                <th> Name </th>
                                <th> Team Name </th>
                                <th> City </th>
                                <th> Date of show </th>
                                <th> Collection </th>
                                <th> Type </th>
                        </thead>

                        <tbody>

                        <?php
                                
                        include 'connection.php';
                                    
                        if (isset($_POST['search']))
                            
                            {
                                
                                $id = $_POST['id'];
                                
                                $selectquery = " select * from Final_list_designer INNER JOIN Fashion_show ON Final_list_designer.city=Fashion_show.city INNER JOIN Attire_details ON Final_list_designer.Team_name=Attire_details.Team_name WHERE Final_list_designer.Designer_id = '$id'";
                                
                                $query = mysqli_query($con,$selectquery);
                                
                                $nums = mysqli_num_rows($query);
                                
                                if ($nums > 0){
                                
                                while($res = mysqli_fetch_array($query)){
                                       
                                ?>
                                    
                                    <tr>
                                        <td> <?php echo $res['Designer_id']; ?> </td>
                                        <td> <?php echo $res['Name']; ?> </td>
                                        <td> <?php echo $res['Team_name']; ?> </td>
                                        <td> <?php echo $res['City']; ?> </td>
                                        <td> <?php echo $res['Date_of_show']; ?> </td>
                                        <td> <?php echo $res['Name_of_collection']; ?> </td>
                                        <td> <?php echo $res['Clothing']; ?> </td>
                                    </tr>
                                        <h1 class="sel"> You Have been selected! </h1>
                                    
                                   <?php
                                       }
                                    }
                                        else{
                                            ?> <script> alert ('You have entered an incorrect Designer ID OR your application is still under process'); </script> <?php
                                        }

                                

                                }
                                ?>
                    </table>
                </div>
            </div>
        </div>
<header>

<main>

    <section>

        <h2 class="mp"> to go back to the main page </h2>

        <a href ="http://localhost:8080/fashion_main/mainpage.php#" class="btnfinal"> click here </a>

    </section>

</main>

</header>

</body>

</html>

