<?php
session_start();
require 'conn.php';

if(isset($_SESSION['loggedIn']))
{
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $data = mysqli_query($conn,$sql);
    $userDetails = mysqli_fetch_assoc($data);
    // echo "Welcome <br>".$userDetails['full_name'];
    ?>
    <html>
<head>
<title>INDEX</title>
<style >
#footer{
                width:100%;
                height:30px;
                background-color:white;
                float:bottom;
                margin-top:21% ;
        }
     *
        {
            margin:0;
            padding:0;
        }

 body{
            background-image:url('46.jpg');
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-position:center;
            background-size:cover; 
        }
        .menu{
            text-align:center;
            border:1px solid black;
            width:350px;
            height:250px;
            background-color:rgba(0,0,0,0.3);
            margin:100px 400px 100px 450px ;

        }
        a {
            color:white;
        }
        #links
        {
            height:40px;
            width:40%;
            color:black;
            display:flex;
            justify-content:space-around;
            float:right;
        }

</style>
</head>
<body>
<div style="height:25px;width:100%;background-color:#33ba7a;display:flex; padding:3px;">
        <div style="width:60%;font-size:20px;padding:3px"><b>Website Name</b></div>
        <div id="links">
            <div><a href="dashboard.php"  style="text-decoration:none;"><b>Home</b></a></div>
            <div><a href="about.php" style="text-decoration:none;"><b>About us</b></a></div>
            <div><a href="contact.php" style="text-decoration:none;"><b>Contact</b></a></div>
        </div>
    </div>
<marquee><h3><b><i>Welcome to our official page</i></b></h3></marquee>
<div class="menu">
<br>
   <a href="project_2.php"><b><h2>Add_Items</h2></b></a><br>
   <a href="View_Items.php"><b><h2>View_Items</h2></b></a><br>
   <a href="Delete_Item.php"><b><h2>Delete_Items</h2></b></a><br>
<a href="logout.php"><b><i><h2>LOGOUT</h2></i></b></a>

</div>
<marquee style="position:absolute;bottom:-70px;"><h3><b><i>Designed By FIRAQUE:IMRAN:AMAR</i></b></h3></marquee>

  <div id="footer" align="center">
            <h5>copyright@2018</h5>

        </div>


</body>
</html>



    <?php
}  
else
{
    ?>
    <script>
        window.location.href = 'login.php';
    </script>
    <?php
}




?>