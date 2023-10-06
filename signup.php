<!--signup-->
<?php
include "boilerplate2.html";
session_start();
$conn = mysqli_connect("localhost","root","","login_sample_db") or die("connection failed" . mysqli_connect_error());

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['signup'])){

         $user=mysqli_real_escape_string($conn,$_POST["user_name"]);
         $pass=mysqli_real_escape_string($conn, $_POST["password"]);
         
    
         //check username we are creating does not exist in the system
        // $sql = "SELECT username FROM signupuser WHERE username = $user";
        // $result=mysqli_query($conn,$sql) or die("Query Failed");
    
        // if(mysqli_num_rows($result)>0){
          //  echo "<p>username already exists</p>";
         //}else{
            $sql1 = "INSERT INTO signupuser(username, password)VALUES('$user','$pass')";
    
            if(mysqli_query($conn , $sql1)){
                echo "Successfully LoggedIn";
            }else{
                echo "Insert Query failed";
            }
         }
    }
 
    ?>

<body>
<div class="container justify-content-center mt-5 p-5 shadow">
  <div class="row">
     <div class="col-md-6">
        <!---login form--->
        <h1>Sign Up</h1><hr/>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="mt-5">
        <div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="user_name" required>
    
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    
  </div>
  
  <button type="submit" class="btn btn-primary btn-block" name="login">SignUp</button>
  <p>Go back to Login page ? <a href="signin.php">Sign_In</a></p>
      </form>
    </div> 
    <div class="col-md-6">
       <img src="./Assets/login.avif" alt="img" class="img-fluid" />
     </div> 


</div>
</div>
<body>
    </html>