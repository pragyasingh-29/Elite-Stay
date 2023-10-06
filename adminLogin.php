<?php
 include "boilerplate2.html";
    session_start();
    
    if (isset($_POST['admin_login'])){
        $connection= mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"login_sample_db");
     $query="select * from admin where email='$_POST[email]'";
     $query_run=mysqli_query($connection,$query);
     while($row = mysqli_fetch_assoc($query_run)){
        if($row['email'] == $_POST['email']){
            if($row['password']== $_POST['password']){
                session_start();
               
                $_SESSION['admin_id']=$row['admin_id'];
                
                header("location:admin_dashboard.php") or die("Query Failed");
            }
            else{
                echo "<script> alert('wrong password....');</script>";
            }
        }
    }
}
?>


    <body>

    <!---admin login page----->
    <div class="container justify-content-center mt-5 p-5 shadow">
  <div class="row">
     <div class="col-md-6">
        <!---login form--->
        <h1>Admin Sign In</h1><hr/>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="mt-5">

        <div class="form-group">
    <label for="uname">Email</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="email" required>
    
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    
  </div>
  
  <button type="submit" class="btn btn-primary btn-block mt-5" name="admin_login">SignIn</button>
      </form>
    </div> 
    <div class="col-md-6">
       <img src="./Assets/login.avif" alt="img" class="img-fluid" />
     </div> 


</div>
</div>
<!---admin login page end--->


</body>
</html>

