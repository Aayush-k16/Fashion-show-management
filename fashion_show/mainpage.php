<!DOCTYPE html>
<html>
<head>
<title> Fashion Show </title>

<link rel = "stylesheet" type = "text/css" href="css/mainpagestyle.css">

</head>

<body>

<header>

<main>

<div class="main-div">
<h2> Mark the dates of upcoming fashion show in your city </h2>
    <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th> City </th>
                        <th> Date of Show </th>
                </thead>

                <tbody>

                        <?php
                        
                        include 'connection.php';
                        
                        $selectquery = " select * from Fashion_show ORDER BY Date_of_show";
                        
                        $query = mysqli_query($con,$selectquery);
                        
                        $nums = mysqli_num_rows($query);
                        
                        while($res = mysqli_fetch_array($query)){
                               
                        ?>
                            
                            <tr>
                                <td> <?php echo $res['City']; ?> </td>
                                <td> <?php echo $res['Date_of_show']; ?> </td>
                            </tr>
                            
                           <?php
                           }
                        
                        ?>
                    
            </table>
        </div>
    </div>
</div>

	<section>
		<h1 class="title"> Fashion Show </h1>
        <h1 class="host"> Are you the host? </h1>
        <h1 class="reg"> Registered as designer? </h1>
		<h3 class="one"> Click here if you are a designer </h3>
        <h3 class="team"> Register your team,
		<h3 class="two"> Click here if you are an audience </h3>

		<h3 class="feed"> If you have already attended the show, please leave us a </h3>

        <h3 class="line"> </h3>

		<h3 class="designer"> To check the designers coming to your city, </h3>

		<a href ="http://localhost:8080/fashion_main/final_list.php#" class="btnfinal"> click here </a>

        <a   href='http://localhost:8080/fashion_main/instructions.php' class="btnteam"> here </a>
        <a href = 'http://localhost:8080/fashion_main/admin_login.php' class="admin"> Login </a>
        <a href = 'http://localhost:8080/fashion_main/designer_show.php' class="regbtn"> Login </a>
		<a href = 'http://localhost:8080/fashion_main/feddback.php' class="btnfeed"> Feedback </a>
		<a href = 'http://localhost:8080/fashion_main/designer.php#' class="btnone"> Designer </a>
		<a href = 'http://localhost:8080/fashion_main/ticket_sales.php' class="btntwo"> Audience </a>
	</section>

</main>

</header>

</body>

</html>

