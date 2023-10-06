<?php 
 include "boilerplate2.html";
 session_start();
 if(!empty($_SESSION['admin_id'])){
?>


 
 <body>
<br>
 <!---admin dashboard start--->
         <div class="mt-3 text-center" >
            
                <a href="rooms.php"><button class="btn btn-primary">check Room Status</button></a> 
                <a href="logout.php"><button class="btn btn-primary">Log out</button></a> 
           
         </div>
         <h1 style="color:black;font-family: 'Dancing Script', cursive;font-size: 45px;" class="text-center mt-3">Checked In User's Details</h1>
<!---admin dashboard end---->


<!----single non ac start---->

<div class="row">

         <div class="container justify-content-center mt-5 p-5 show-user-details">

         <h3 style="color:#014421;font-family: 'Alegreya SC', serif;" class="text-center">Single Non Ac Rooms Status</h3> <br><br>
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User Id</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In Date</th>
                            <th>Check-out Date</th>
                        </tr>
                    </thead>
                    <?php
                    $user_count=0;
                    $connection= mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,"login_sample_db");
                    $query="select * from single_non_ac where status=1;";
                    $query_run=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($query_run)){
                       $user_count=$user_count+1;
                       ?>
                       <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['holder_name'];?></td>
                        <td><?php echo $row['holder_id'];?></td>
                        <td><?php echo $row['room_no'];?></td>
                        <td><?php echo $row['holder_address'];?></td>
                        <td><?php echo $row['child'];?></td>
                        <td><?php echo $row['adult'];?></td>
                        <td><?php echo $row['in_date'];?></td>
                        <td><?php echo $row['out_date'];?></td>
                       </tr>
                       <?php
                }
                    ?>
                </table>
            </div>
<!---single non-ac finish---->
<br><br>
<!----double non ac start---->
<div class="row">
    <div >
<h3 style="color:#014421; font-family: 'Alegreya SC', serif;" class="text-center">Double Non Ac Rooms Status</h3> <br>
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User Id</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In Date</th>
                            <th>Check-out Date</th>
                        </tr>
                    </thead>
                    <?php
                    $user_count=0;
                    $connection= mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,"login_sample_db");
                    $query="select * from double_non_ac where status=1;";
                    $query_run=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($query_run)){
                       $user_count=$user_count+1;
                       ?>
                       <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['holder_name'];?></td>
                        <td><?php echo $row['holder_id'];?></td>
                        <td><?php echo $row['room_no'];?></td>
                        <td><?php echo $row['holder_address'];?></td>
                        <td><?php echo $row['child'];?></td>
                        <td><?php echo $row['adult'];?></td>
                        <td><?php echo $row['in_date'];?></td>
                        <td><?php echo $row['out_date'];?></td>
                       </tr>
                       <?php
                }
                    ?>
                </table>
            </div>
            </div>
<!---double non-ac finish----><br><br>
<!---single ac start---->
<div class="row">
    <div>
<h3 style="color:#014421; font-family: 'Alegreya SC', serif;" class="text-center">Single Ac Rooms Status</h3> <br>
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User Id</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In Date</th>
                            <th>Check-out Date</th>
                            
                        </tr>
                    </thead>
                    <?php
                    $user_count=0;
                    $connection= mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,"login_sample_db");
                    $query="select * from single_ac where status=1;";
                    $query_run=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($query_run)){
                       $user_count=$user_count+1;
                       ?>
                       <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['holder_name'];?></td>
                        <td><?php echo $row['holder_id'];?></td>
                        <td><?php echo $row['room_no'];?></td>
                        <td><?php echo $row['holder_address'];?></td>
                        <td><?php echo $row['child'];?></td>
                        <td><?php echo $row['adult'];?></td>
                        <td><?php echo $row['in_date'];?></td>
                        <td><?php echo $row['out_date'];?></td>
                       </tr>
                       <?php
                }
                    ?>
                </table>
            </div>
            </div>
<!----single ac rooms finish-----><br><br>
<!----double ac start---->
<div class="row" >
    <div>
<h3 style="color:#014421;font-family: 'Alegreya SC', serif;"class="text-center">Double Ac Rooms Status</h3> <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User Id</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In Date</th>
                            <th>Check-out Date</th>
                        </tr>
                    </thead>
                    <?php
                    $user_count=0;
                    $connection= mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,"login_sample_db");
                    $query="select * from double_ac where status=1;";
                    $query_run=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($query_run)){
                       $user_count=$user_count+1;
                       ?>
                       <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['holder_name'];?></td>
                        <td><?php echo $row['holder_id'];?></td>
                        <td><?php echo $row['room_no'];?></td>
                        <td><?php echo $row['holder_address'];?></td>
                        <td><?php echo $row['child'];?></td>
                        <td><?php echo $row['adult'];?></td>
                        <td><?php echo $row['in_date'];?></td>
                        <td><?php echo $row['out_date'];?></td>
                       </tr>
                       <?php
                }
                    ?>
                </table>
            </div>
</div>
<!----double ac rooms end------>
            </div> 
</div>
    </body>
    </html>
    <?php
 }else{
        header("location:http://localhost/New%20folder/adminLogin.php");
    }
    ?>