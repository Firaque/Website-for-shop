<?php
require 'conn.php';


if(isset($_POST['registerbtn']))
{
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    $sql = "INSERT INTO users(email,password,full_name)VALUES('$email','$pass','$name')";
    if(mysqli_query($conn,$sql))
    {
        echo "Successfully Registered";
    }
    else
    {
        echo "Please Try Again!!";
    }




}


?>



<html>
    <head>
        <title>
            Registration
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
            background-image:url('pic42.jpg');
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-position:center;
            background-size:cover; 
            /* text-color:  */
        }
        a {
            color:#F7ECF6;
        }
         .button{
            background-color:#9D721C;
            border:none;
            padding:10px 25px;
            text-align:center;
            text-decoration:none;
            display:inline-block;
            font-size:12px;
            margin:4px 2px;
            cursor:pointer;
        }

        .reg{
            text-align:center;
            border:1px solid black;
            width:350px;
            height:300px;
            background-color:rgba(76,180,75,0.3);
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

        </style>

  

    </head>
    <body>
    <div style="height:40px;width:100%;background-color:#991ab2;display:flex; padding:3px;">
        <div style="width:60%;font-size:20px;padding:3px"><b>Website Name</b></div>
        <div id="links">
            <div><a href="about.php"  style="text-decoration:none;"><h3><b>About us</b></h3></a></div>
            <div><a href="contact.php" style="text-decoration:none;"><h3><b>Contact</b></h3></a></div>
            <!-- <div><a href="" style="text-decoration:none;">Link3</a></div> -->
        </div>
    </div>
    <hr><marquee style="color:#3333ff;font-weight:bold;"><b><i>!!! PLEASE REGISTER YOURSELF !!!</i></b></marquee><hr>
        <form method="POST">
        <div class="reg">
        <h3>Registration Form : </h3><br>
        <hr><br>
        
            Full Name : 
            <input type="text" name = "full_name" placeholder = "Enter Full Name">
            <br><br>
            
            Email-ID : 
        
            <input type="email" name = "email" placeholder = "Enter Email-ID">
            <br><br>

            Password : 

            <input type="password" name = "pass" placeholder = "Enter Password">
            <br><br>

            <input class="button" type="submit" name="registerbtn" value="REGISTER">
            <br><br>
            Already Have Account ? <a href="login.php">Click Here..</a>
            </div>
        </form>
       <h3> <marquee style="color:white;font-weight:bold;position:absolute;bottom:-130px;"><b><i> Developed By : Firaque ,Imran, Amar</i></b></marquee></h3>
        <div id="footer" align="center">
            <h5>copyright@2018</h5>

        </div>
    </body>
</html>
