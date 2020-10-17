<?php 
session_start();
$con=mysqli_connect('localhost','connection','#8iloveyoU','company');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   VIEW USER
    </title>
    <link rel="stylesheet" href="style9.css">

</head>
    <body>
    <div class="view">
        <h2 style=" margin-top:70px; font-size: 40px">USER INFORMATION</h2>
       <table class="flat-table flat-table-1">
          
           <th>NAME</th>
           <th>E-mail ID</th>
           <th>CREDITS</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>
        <div class="css-button" >
                 <p class="css-button-text">TRANSFER TO</p>
                 <div class="css-button-inner">
                 <a href="viewuser.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">TRANSFER TO</p>
               </div></a>
               </div>
               </div>


               <br> <br> <br> <br> <br>
               <div class="css-button" >
                 <p class="css-button-text">BACK</p>
                 <div class="css-button-inner">
                 <a href="selectuser.php.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">BACK</p>
               </div></a>
               </div>
               </div>
               


    </body>
</html>