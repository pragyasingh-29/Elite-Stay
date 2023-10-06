<?php
 include "boilerplate2.html";
  session_start();

   if(!empty($_SESSION['admin_id']) OR !empty($_SESSION['user_id'])){

  if(isset($_POST['hotelroom'])){
    

    $room_no=$_POST['room_no'];
    $room_type=$_POST['room_type'];
     
     $connection= mysqli_connect("localhost","root","");
     
     $db=mysqli_select_db($connection,"login_sample_db");

     if($_POST['room_type']=='single_non_ac'){
       $query="update single_non_ac set holder_name='$_POST[holder_name]',holder_id=$_POST[holder_id],holder_mobile='$_POST[holder_mobile]',holder_address='$_POST[holder_address]',child=$_POST[child],adult=$_POST[adult],in_date='$_POST[in_date]',out_date='$_POST[out_date]',status=1 where room_no=$_POST[room_no]";
     }
     
     if($_POST['room_type']=='single_ac'){
        $query="update single_ac set holder_name='$_POST[holder_name]',holder_id=$_POST[holder_id],holder_mobile='$_POST[holder_mobile]',holder_address='$_POST[holder_address]',child=$_POST[child],adult=$_POST[adult],in_date='$_POST[in_date]',out_date='$_POST[out_date]',status=1 where room_no=$_POST[room_no]";
      }
      if($_POST['room_type']=='double_non_ac'){
        $query="update double_non_ac set holder_name='$_POST[holder_name]',holder_id=$_POST[holder_id],holder_mobile='$_POST[holder_mobile]',holder_address='$_POST[holder_address]',child=$_POST[child],adult=$_POST[adult],in_date='$_POST[in_date]',out_date='$_POST[out_date]',status=1 where room_no=$_POST[room_no]";
      }
      if($_POST['room_type']=='double_ac'){
        $query="update double_ac set holder_name='$_POST[holder_name]',holder_id=$_POST[holder_id],holder_mobile='$_POST[holder_mobile]',holder_address='$_POST[holder_address]',child=$_POST[child],adult=$_POST[adult],in_date='$_POST[in_date]',out_date='$_POST[out_date]',status=1 where room_no=$_POST[room_no]";
      }
     $query_run = mysqli_query($connection,$query);
     header("Location:booking-confirmation.php?room_no=$room_no&room_type=$room_type");
    }

    }

?>

    <body>
        
        
        <!----user fill details start----->

          <div class="container d-flex  mt-5 p-3 show-details" >
          
            <div class="row mb-5 offset-3">
            
                <div class="col-md-12">     

                    <div class="d-flex inline">

                        <br><h1 style="color:#014421; font-family: 'Dancing Script', cursive;font-size: 45px;" class="mb-5 mt-5"> BOOK THE ROOM</h1>

                        <!-- <a href="logout.php" class=" ml-5"><button class="btn btn-primary mr-5 pt-2 pr-3 pl-3">Log Out</button></a> -->

                    </div>
               


                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="mt-3">
               
                 <div class="form-group">
                     <label>Room No.:</label>
                          <input type="text" name="room_no" size="50" class="form-control  pt-3 pb-3" placeholder="Room No." >
                      </div>

                      <div class="form-group">
                      <label>Room Type:</label>
                          <input type="text" name="room_type" size="50" style="height:30px;font-size:15px"  class="form-control  pt-3 pb-3"  placeholder="Room Type" >
                      </div>
             
                      <div >
                        <label>Holder Name:</label>
                         <input type="text" placeholder="Enter holder name" size="50"style="height:30px;font-size:15px" name="holder_name" class="form-control  pt-3 pb-3"  required="">
                     </div><br>


                     <div >
                        <label>Holder Id:</label>
                         <input type="password" placeholder="Enter holder ID" size="50"style="height:30px;font-size:15px" name="holder_id" class="form-control  pt-3 pb-3" required="">
                     </div><br>


                     <div>
                        <label>Holder Mobile:</label>
                         <input type="text" size="50" placeholder="Enter holder phone no" style="height:30px;font-size:15px" name="holder_mobile" class="form-control  pt-3 pb-3" required="">
                     </div><br>


                     <div>
                        <label>Holder Address:</label>
                        <textarea rows="5" cols="50"  size="50" placeholder="Enter holder address" name="holder_address" style="font-size:15px" class="form-control  pt-3 pb-3" required=""></textarea>
                     </div><br>


                     <div>
                        <label>No of Child:</label>
                         <input type="text" size="50"  placeholder="Enter no. of child" style="height:30px;font-size:15px" name="child" class="form-control  pt-3 pb-3" required="">
                     </div><br>


                     <div>
                        <label>No Of Adults:</label>
                        <input type="text" size="50"  placeholder="Enter no. of adults" style="height:30px;font-size:15px" name="adult" class="form-control  pt-3 pb-3" required="">
                     </div><br>


                     <div>
                        <label>Check-In-Date:</label> 
                         <input type="date"   size="50" placeholder="Enter check-in-date" style="height:30px;font-size:15px" name="in_date" class="form-control  pt-3 pb-3" required="">
                     </div><br>


                     <div>
                        <label>Check-Out-Date:</label>   
                         <input type="date" size="50" placeholder="Enter check-out-date"  style="height:30px;font-size:15px"  name="out_date" class="form-control  pt-3 pb-3" required="">
                     </div><br><br><br>


                     <button type="submit" class=" btn pt-4 pb-4 btn-block btn-warning text-white" name="hotelroom">Book Now</button>


                </form>
            </div>
            </div>
        </div>

<br><br><br><br><br>
<!-----user fill details end---->
    </body>
</html>
