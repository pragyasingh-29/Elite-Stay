<?php
include "boilerplate2.html";
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){

if(isset($_POST['login'])){

    $conn = mysqli_connect("localhost","root","","login_sample_db") or die("connection failed" . mysqli_connect_error());

     $user=mysqli_real_escape_string($conn,$_POST["user_name"]);
     $pass=mysqli_real_escape_string($conn, $_POST["password"]);
     
     $sql = "SELECT * FROM signupuser WHERE username = '{$user}' AND password ='{$pass}'";
         $result = mysqli_query($conn,$sql) or die("Query Failed");
    
         if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
               session_start();
               
               $_SESSION['user_id']=$row['user_id'];
               $_SESSION['username']=$row['username'];

               header("location:http://localhost/New%20folder/book_room.php");
            }

       }else{
            echo "<div class='alert alert-danger'>Username and password does not match</div> ";
           }
       }
    }

?>

<body>
<div class="container justify-content-center mt-5 p-5 shadow">
  <div class="row">
     <div class="col-md-6">
        <!---login form--->
        <h1>Sign In</h1><hr/>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="mt-5">
        <div class="form-group">
         
    <label for="uname">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="user_name" required>
    
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    
  </div>
  
  <button type="submit" class="btn btn-primary btn-block" name="login">SignIn</button>
  <p>Go back to Sign up page ? <a href="signup.php">Sign_Up</a></p>
      </form>
    </div> 
    <div class="col-md-6">
       <img src="./Assets/login.avif" alt="img" class="img-fluid" />
     </div> 


</div>
</div>
<body>
</html>