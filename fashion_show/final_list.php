<!DOCTYPE html>
<html>
<head>
<title> Final List </title>

<link rel = "stylesheet" type = "text/css" href="css/fl_des.css">

</head>

<body>
    
    <div class="main-div">
        <h1> DESIGNERS COMING TO YOUR CITY </h1>
            <div class="center-div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Team Name </th>
                                <th> City </th>
                        </thead>

                        <tbody>

                                <?php
                                
                                include 'connection.php';
                                
                                $selectquery = " select * from Final_list_designer";
                                
                                $query = mysqli_query($con,$selectquery);
                                
                                $nums = mysqli_num_rows($query);
                                
                                while($res = mysqli_fetch_array($query)){
                                       
                                ?>
                                    
                                    <tr>
                                        <td> <?php echo $res['Name']; ?> </td>
                                        <td> <?php echo $res['Team_name']; ?> </td>
                                        <td> <?php echo $res['City']; ?> </td>
                                    </tr>
                                    
                                   <?php
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

