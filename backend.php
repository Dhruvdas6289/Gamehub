<?php
    $insert=false;
    if(isset($_POST['UserName'])){
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con)
    {
        die ("connection to this database failed due to". mysqli_connect_error());
    }
        
    
        $UserName= $_POST['UserName'];
        $Pass=$_POST['Pass'];
        $Email=$_POST['Email'];
        $No=$_POST['No'];
        $Tournaments=$_POST['Tournaments'];
        $sql="INSERT INTO `gamers`.`gamers`( `UserName`, `Password`, `Email`, `PhoneNo`, `Tournament`, `Date`) 
        VALUES ('$UserName', '$Pass', '$Email', '$No', '$Tournaments', current_timestamp());";
        
    
        if($con->query($sql)==true)
        {
           // echo("Successfully regsitered");
           $insert=true;
        }
        else{
            echo "Error: $sql <br> $con->error";
        }
        $con->close();
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Zone</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

  
  <center>
    <img src="game.png" width="400" height="250">
    <br>
  

  <video src="back.mp4 " autoplay loop muted></video>
  <audio autoplay loop> <source src="r1.mp3" type="audio/mp3" /> </audio>

  <div class="container">
    
      <p class="text">Please Enter Player Details..</p>
  </div>
  <br>
  <?php
  if($insert==true)
  {
  echo "<div class='container1'>
      <P class='text1'>You have been successfully registered in the gaming tournament..</p>
  </div>";
  }

  ?>



  
    
    <div class="login">

      <form action="backend.php" method="post">
        <div  class="user_box">
          <lable for="Name" >UserName</lable><br>
          <input type="text" id="UserName"name="UserName"><br>

          <lable  for="Pas" >Password</lable><br>
          <input type="varchar" id="Pass" name="Pass"><br>

          <lable for="email" >Email</lable><br>
          <input type="varchar" id="Email" name="Email"><br>
          
          <lable for="no" >PhoneNo</lable><br>

          <input type="varchar" id="No" name="No">
          
          <br>

   
          <label for="">Tournaments</label>
          <br>
        
        <select id="Tournaments" name="Tournaments">
         <option value="Valorant">Valorant</option>
         <option value="CS:GO">CS:GO</option>
         <option value="PUBG">PUBG PC  </option>
         <option value="Fortnite">Fortnite  </option>
        </select>

        <br>
        <br>
        <button>Submit</button>
        </div>
        <center>


  </center>

        
        

</body>
</html>


