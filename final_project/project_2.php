<?php
require 'conn.php';
if(isset($_POST['Items_Stored']))
{
    $Item=$_POST['Item_Name'];
    $Price=$_POST['Price'];
    $Description =$_POST['Description'];
    $query = "INSERT INTO items (Item_Name,Price,Description) VALUES ('$Item','$Price','$Description')";
     if(mysqli_query($conn,$query))
     {
         echo "Successfully Inserted";
     }
     else
     {
         echo "Something Went Wrong";
     }
} 
?>

<html> 
    <head>
        <title>Add Items</title>
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
            background-image:url('44.jpg');
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-position:center;
            background-size:cover;
            }

            h2{
                color:white;
            } 
            h3{
                color:#800000;
            }
        
        .button{
            background-color:#E0EC32;
            border:none;
            padding:10px 25px;
            text-align:center;
            text-decoration:none;
            display:inline-block;
            font-size:12px;
            margin:4px 2px;
            cursor:pointer;
        }
        .item{
            text-align:center;
            border:3px solid black;
            width:425px;
            height:325px;
            background-color:rgba(75,180,76,0.3);
            margin:70px 400px 100px 380px ;
            font-family:Arival,Helvetica,sans-serif;
           
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
            <div><a href="dashboard.php"  style="text-decoration:none;"><h3><b>Home</b></h3></a></div>
            <div><a href="about.php" style="text-decoration:none;"><h3><b>About us</b></h3></a></div>
            <div><a href="contact.php" style="text-decoration:none;"><h3><b>Contact</b></h3></a></div>
        </div>
    </div>
    <h3><b><i> <marquee>!!Hurry up!!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You can add any items</marquee></i></b></h3>
        <form method="POST">
        <div class="item"> 
        <h1><b><i><u>Items Detail</u></i></b></h1>
        <hr><br>
       <i><b>Enter Item Name:</b></i>&nbsp;<br>
        <input type="text" name="Item_Name" placeholder="Item_Name"><br><br>
        <i><b>Price:</b></i>&nbsp;<br>
        <input type="number" name="Price" placeholder="Price"><br><br>
        <i><b>Description:</b></i>&nbsp;<br>
        <textarea name="Description" rows="3" cols="30" placeholder="Description"></textarea><br><br>
        <input class="button" type="submit" name="Items_Stored" value="ADD">
        <br><br><br>
        </div>
        </form>
        <h2><b><i> <marquee  style="position:absolute;bottom:-120px;">Designed By Firaque,Imran,Amar</marquee></i></b></h2>
        <div id="footer" align="center">
            <h5>copyright@2018</h5>

        </div>

    </body>
</html>

