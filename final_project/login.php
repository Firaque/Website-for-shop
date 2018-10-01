<?php
require 'conn.php';
session_start();
if(isset($_POST['loginbtn']))
{
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";

    $data = mysqli_query($conn,$query);
    $num = mysqli_num_rows($data);
    if($num != 0 )
    {
        //  header('location : dashboard.php');
        $res = mysqli_fetch_assoc($data);
        $_SESSION['id'] = $res['id'];

        $_SESSION['loggedIn'] = 'true';
        ?>
        <script>
            window.location.href='dashboard.php';
        </script>
        <?php
    }
    else
    {
        echo "<span style='color:red;'>Invalid Credentials</span>";
    }


}


?>


<html>
    <head>
        <title>
        </title>

        <style>
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
            background-image:url('45.jpg');
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-position:center;
            background-size:cover; 
            /* text-color:  */
        }
         .button{
            background-color:#335cd6;
            border:none;
            padding:10px 25px;
            text-align:center;
            text-decoration:none;
            display:inline-block;
            font-size:12px;
            margin:4px 2px;
            cursor:pointer;
        }

        .log{
            text-align:center;
            border:1px solid black;
            width:350px;
            height:300px;
            background-color:rgba(76,175,80,0.3);
            margin:100px 400px 100px 450px ;

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
        a {
            color:#F7ECF6;
        }

        </style>

    </head>
    <body>
    <div style="height:40px;width:100%;background-color:green;display:flex; padding:5px;">
        <div style="width:60%;font-size:20px;padding:3px"><b>Website Name</b></div>
        <div id="links">
            <div><a href="about.php" style="text-decoration:none;"><b><h2>About us</h2></b></a></div>
            <div><a href="contact.php" style="text-decoration:none;"><b><h2>Contact</h2></b></a></div>
            <!-- <div><a href="" style="text-decoration:none;">Link3</a></div> -->
        </div>
    </div>
    <hr><marquee style="color:#0000ff;font-weight:bold;">WELCOME !! PLEASE LOGIN</marquee>
        
        <hr>
        <form method="POST">
        <div class="log">
        <h3><b>Login</b></h3><br><hr><br><br>
            Email-ID : 

            <input type="email" name = "email" placeholder = "Enter Email-ID ..">
            <br><br>

             Password : 
            
            <input type="password" name = "pass" placeholder = "Enter Password..">
            <br><br>

            <input class="button" type="submit" name="loginbtn" value="LOGIN">
            <br><br>            Do Not Have An Account ? <a href="register.php">Click Here..</a>
            </div>
        </form>
        <h3><b><i><marquee  style="position:absolute;bottom:-130px;"> Developed By : Firaque ,Imran, Amar</marquee></b></i></h3>
        <div id="footer" align="center">
            <h5>copyright@2018</h5>

        </div>
    </body>
</html>