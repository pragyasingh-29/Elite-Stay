<?php
    include "boilerplate2.html";
     
   $costOfOneRoomPerDay=900;
?>



   <body>

   <!----------------navigation start------------------>
<!-- Image and text -->
<nav class="navbar navbar-light bg-primary pt-3 pb-3" style="background-color:#13274F !important">

  <a class="navbar-brand text-white" >

    <!-- <img src="https://www.vhv.rs/dpng/d/415-4155495_stars-png-transparent-golden-stars-png-png-download.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->

     <h3>The Paradise</h3>

  </a>

</nav>
<!-- <img src="https://www.pngitem.com/pimgs/m/522-5229751_stars-png-gold-stars-png-transparent-png.png" width="30" height="30"  alt=""> -->


   <div style="margin-top:200px;" class="offset-1 mr-5">
         <h2 style="text-align:center;margin-bottom:60px;">Booking Confirmed</h2>

         <p>We are pleased to inform you that your reservation request has been received and confirmed.</p><br>

         <p>Your booking is confirmed. Thank You!</p>

         <h4>Booking Details</h4><br>

         <!-- <form action="" method="get"> -->
                        
               <table class="table table-bordered">

               <tr>
               <td><label>Holder Id:<br/><strong><?php echo $row["holder_id"] ?></label></label></td>
                    <td><label>Holder Name:<br/><strong><?php echo $row["holder_name"] ?></strong></label></td>
                    <td><label>Check-In-Date:<br/><strong><?php echo $row["in_date"] ?></strong></label> </td>
                    <td> <label>Check-Out-Date:<br/><strong><?php echo $row["out_date"] ?></strong></label>   </td>
                    <td> <label>Total Amount:<br/><strong><?php echo $costOfOneRoomPerDay.'  Rupees' ?></strong></label> </td>
                    <td> <label>Status:<br/><strong>Confirmed</strong></label> </td>

               </tr> 

               </table>
               
               Details: <?php echo $room_type ?>
</div>
       </body>
