<?php

session_start();

if(!empty($_SESSION['admin_id']) OR !empty($_SESSION['user_id'])){

?>

<!DOCTYPE html>

<html>

    <head>

    <title>Booking</title>

     <!--------Bootstrap links------------>
          
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    </head>


    <body>

        <br><br><br>

        <p class="text-secondary text-center fs-6">Room Booked Successfully.....</p><br>

    <div class="text-center">

        <button type="" class="btn btn-primary justify-content-center"><a href="final code.php" class="text-white pl-4 pr-4 pb-3 pt-3">MAIN PAGE</a></button>

    </div>
    
        </body>
        
    </html>

        <?php

         }else{

            header("location:http://localhost/New%20folder/loginHotel.php");

        } ?>