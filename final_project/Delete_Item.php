<?php
    $conn = mysqli_connect('localhost','root','','shop');
    if(!$conn)
    {
        die();
    }



    if(isset($_GET['id']))
   {
       $ID = $_GET['id'];
       $query = "DELETE FROM items WHERE ID = '$ID'";
       mysqli_query($conn,$query);
   }

   $query = "select * from items";
   $data = mysqli_query($conn,$query);
   ?>

   <!DOCTYPE html>
   <html>
   <head>
   <title>View items</title>
   <style>
   #footer{
                width:100%;
                height:30px;
                background-color:white;
                float:bottom;
                margin-top:25% ;
        }
   *
        {
            margin:0;
            padding:0;
        }
   table{
       font-family:arial,sans-serif;
       border-collapse:collapse;
       width:100%;

   }
   td,th{
       border:1px solid #dddddd;
       text-align:left;
       padding:8px;

   }
   tr:nth-child(even){
       background-color:#dddddd;
   }
   .view2{
     text-align:center;
     color:darkblue;
     text-decoration:underline;

   }
   body{
       background:#ccb280;
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
   <div style="height:40px;width:100%;background-color:#33ba7a;display:flex; padding:4px;">
        <div style="width:60%;font-size:20px;padding:2px;"><b>Website Name</b></div>
        <div id="links">
            <div><a href="dashboard.php"  style="text-decoration:none;"><h3><b>Home</b></h3></a></div>
            <div><a href="about.php" style="text-decoration:none;"><h3><b>About us</b></h3></a></div>
            <div><a href="contact.php" style="text-decoration:none;"><h3><b>Contact</b></h3></a></div>
        </div>
    </div>
    <br>
   
   <div class="view1">
   <div class="view2">
   <tr><td><h2><b>AVAILABLE ITEMS</b></h2></td></tr><br>
   </div>



   <table>
   <tr>
       <th>ID</th>
       <th>Item_Name</th>
       <th>Price</th>
       <th>Description</th>
       <th>Action</th>
   </tr>

<?php
$i=1;
while($result = mysqli_fetch_assoc($data))
{
  ?>
  <tr>
   <td><?php echo $i;?></td>
   <td><?php echo $result['Item_Name'];?></td>
   <td><?php echo $result['Price'];?></td>
   <td><?php echo $result['Description'];?></td>
 <td> <a href="Delete_Item.php?id=<?php echo $result['ID'];?>">delete</a></td>
  </tr>
 
  <?php
  $i++;
}
?>
<!-- <a href="dashboard.php"><input  class="button" type='submit' value="Main Menu"></a> -->

</table>
<div id="footer" align="center">
            <h5>copyright@2018</h5>

        </div>
</body>
</html>
  
    


