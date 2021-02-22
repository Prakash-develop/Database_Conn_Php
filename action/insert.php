<?php
include("../db.php");
  if(isset($_POST['submit']))
  {
  
      $name=$_POST['name'];
      $department=$_POST['department'];
      $gender=$_POST['gender']; 
      $email=$_POST['email']; 
      
     
      {
      $sql="insert into details(name,department,gender,email) values('$name','$department','$gender','$email')";
          
          $rec=mysqli_query($conn,$sql);
          if($sql)
          {
              echo"<script>alert('enter data successfully');</script>";
          }else{
              echo"<script>alert('enter data not successfully');</script>";
          }
          header("Location:display.php");
  }
  }

?>

