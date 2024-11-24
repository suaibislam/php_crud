 <?php

include 'config.php';

// if(!empty($_SESSION["id"])){
//   header("Location: index.php");
// }

if(isset($_POST['submit'])){
  $name =$_POST['name'];
  $username =$_POST['username'];
  $email =$_POST['email'];
  $password =$_POST['password'];
  $confirmpassword =$_POST['confirmpassword'];

  $duplicate = mysqli_query($conn , " SELECT * FROM tb_users WHERE username ='$username' OR email = '$email' ");
  if (mysqli_num_rows($duplicate)>0) {
    echo "user and email already token";
    
  }else{
    if($password == $confirmpassword){
      $query = "INSERT INTO  `tb_users` VALUES('','$name','$username','$email','$password') ";
      
      mysqli_query($conn,$query);
      echo "<script> alert('Registration successfully')</script>";
    }else{
      echo  "<script> alert('Error')</script>";
    }
 

 
  }

}


?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  <!-- <link rel="stylesheet" href="./style.css"> -->

</head>
<body>

<h2>Registration</h2>

<form action="" method="post" autocomplete="off">

<label for="name">Name :</label>
<input type="text" name="name" id="name" required value=""><br>
<label for="username">Username :</label>
<input type="text" name="username" id="name" required value=""><br>
<label for="email">Email :</label>
<input type="email" name="email" id="email" required value=""><br>
<label for="password">Password :</label>
<input type="password" name="password" id="password" required value=""><br>
<label for="confirmpassword">Confirm password :</label>
<input type="password" name="confirmpassword" id="confirmpassword" required value=""><br>
<button type="submit" name="submit">Register</button>

</form>
<br>
<a href="login.php">Login</a>
  
  


  
<script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
<script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
</body>
</html> 
