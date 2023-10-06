<?php
  include "boilerplate.html";
  session_start();
?>

    <body>

  <!----------------navigation start------------------>
      <nav>

          <ul>
              <h1 style="display:inline;color:white;float:left;padding-left:30px;padding-top:16px;">THE PARADISE</h1>

              <li><a href="http://localhost/New%20folder/signin.php">User Login</a></li>

              <li><a href="http://localhost/New%20folder/adminLogin.php">Admin Login</a></li>

              <li><a href="#contact">Contact Us</a></li>

              <li><a href="#services">Services</a></li>

              <li><a href="#about">About</a></li>

              <li><a href="#Home">Home</a></li>
            
           </ul>

      </nav><br><br>

    <!----------------Section 1--------------->

    <div>
             <?php if(isset($_SESSION['username'])) {?>

            <p style="background-color:#13274F;color:white;font-size:large;display: inline; float:right;padding:14px 5px;padding-left:16px;margin-top:-8px;">Welcome <strong><?php echo $_SESSION['username'] ?></strong></p>
            
            <?php } else{ ?>

    <p></p>

    <?php }  ?>
            
          <div style=" width:600px;margin-top:20px; display: inline; padding-left:30px;padding-top:30px;margin-right:20px;">

                <img  src="https://images.pexels.com/photos/70441/pexels-photo-70441.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="myimg1">

          </div>

          <div style="float:right;display: inline;height:600px;width:600px;padding:50px;text-align: center;" data-aos="fade-left">

                <h1 style="color:#13274fde;line-height:43px;letter-spacing:5px;font-weight: bolder;">THE<br>PARADISE<hr></h1>

                <p class="para1 p1">One of the best hotels in Andheri, The Paradise by Tunga, lets you experience an extraordinary urban escape without breaking the budget. Spectacular interiors, spacious rooms, and modern amenities make our hotel truly a calm and cool place to relax.
                </p>

                <a href="https://www.tripadvisor.in/Hotel_Review-g304554-d299124-Reviews-The_Lalit_Mumbai-Mumbai_Maharashtra.html"><img src="http://alayahotels.com/alayadedaunkuta/wp-content/uploads/sites/3/2017/04/TripAdvisor-Certificate-Of-Excellence-2015.jpg" height="280px" width="350px" style="margin-top:50px;border:1px solid black;"></a>

          </div>

      </div>

<!--------------- Section 2-------------------->

<div id="Home" >

  <div id="div2" data-aos="fade-up">

           <div>

                <br><h1 class="div3">Our Rooms</h1>

                <p class="p1 mypara">Discover the best of life's pleasures at Paradise, a leading business hotel in Andheri East.</p>
            
            </div><br><br>

            <div class="myimage3">

                <div class="myimage1"><img src="http://www.tungahotels.com/images/tunga/paradise/paradise-executive.jpg" width="550px" height="430px" data-aos="fade-up"></div>

                <div class="myimage2"><img src="http://www.tungahotels.com/images/tunga/paradise/paradise-deluxe.jpg" width="550px" height="430px" data-aos="fade-up"></div>

  </div>

</div>

           <div class="myimage4" data-aos="fade-up">

             <div class="myimage5"><br><h1>Serenity Rooms<br><hr><br></h1>

                <p class="p1">Cozy,that's the word that comes to mind the moment you enter these rooms.It features a host of fine amenities and ensures that it makes you feel very pampered.</p><br>

                <a href="#"><button class="but" id="open">VIEW MORE</button></a>

           </div>

          <div class="myimage6"><br><h1>Majesty Rooms<br><hr><br></h1>

                <p class="p1">Cozy,that's the word that comes to mind the moment you enter these rooms.It features a host of fine amenities and ensures that it makes you feel very pampered.</p><br>

                <a href="#"><button class="but" id="open">VIEW MORE</button></a>

            </div>

        </div>
 
<!-------------------Section 3------------------->

<div id="services" class="mydiv1" data-aos="fade-up">

    <h1  class="div3">Room Amenities</h1>

        <ol id="mylists" data-aos="fade-up">

            <ul class="mylist1 p1">

              <li><i class="fa fa-snowflake-o fa-lg" aria-hidden="true" style="color:#014421;"></i>&nbsp;&nbsp;AIR CONDITIONER</li>

              <li><i class="fa fa-phone  fa-lg" aria-hidden="true" style="color:#014421;"></i>&nbsp;&nbsp;DIRECT DIAL TELEPHONE</li>

              <li><i class="fa fa-coffee  fa-lg" aria-hidden="true" style="color:#014421;"></i>&nbsp;&nbsp;COMPLEMENTARY BREAKFAST</li>

            </ul>

            <ul class="mylist2 p1">

              <li><i class="fa fa-money  fa-lg" aria-hidden="true" style="color:#014421;"></i>&nbsp;&nbsp;SAFETY DEPOSIT</li>

              <li><i class="fa fa-bath  fa-lg" aria-hidden="true" style="color:#014421;"></i>&nbsp;&nbsp;BATHROOM & SLIPPERS</li>

              <li><i class="fa fa-bed  fa-lg" aria-hidden="true" style="color:#014421;"></i>&nbsp;&nbsp;1 KING SIZE BED</li>

            </ul>

            <ul class="mylist3 p1">

              <li><i class="fa fa-television  fa-lg" aria-hidden="true" style="color:#014421;"></i>&nbsp;&nbsp;FLAT SCREEN SATELLITE TV</li>

              <li><i class="fa fa-shower  fa-lg" aria-hidden="true" style="color:#014421;"></i>&nbsp;&nbsp;IN-SUITE BATH</li>

              <li><i class="fa fa-wifi  fa-lg" aria-hidden="true" style="color:#014421;"></i>&nbsp;&nbsp;WIFI</li>

            </ul>

       </ol>

</div>

  <!----------------------Section 4---------------------->

  <div id="about" data-aos="fade-up">

    <h1 class="div3" data-aos="fade-up">Dining</h1>

    <p class="hell ">An All Day Dine concept</p>

  </div><br>

<!----------------Dining image slider start---------------->

  <div class="dinning"  data-aos="fade-up">

    <div class="container"  data-aos="fade-up">

      <div class="image-box"  data-aos="fade-up">

        <div class="image">

          <img class="img1" src="https://prod01dest.wpengine.com/wp-content/uploads/2017/09/LATENIGHTEATS_California_MarketStreetCafe_.jpg" alt="">

        </div>

        <div class="image">

          <img class="img2" src="https://wallpapercave.com/wp/wp4659006.jpg" alt="">

        </div>

        <div class="image">

          <img class="img3" src="http://media.pamper.my/2017/11/pamper.my_marinis-57.jpg" alt="">

        </div>

        <div class="image">

          <img class="img4" src="http://2.bp.blogspot.com/-seeF4-6yTt8/UdVcwtDWlZI/AAAAAAAAFvA/pdrZGb4IWik/s960/Delicious+Foods+(5).jpg" alt="">

        </div>

        <div class="image">

          <img class="img4" src="https://media.weddingz.in/images/0b5bd41c36a5bab208d74e3f7696e0d8/the-international-by-tunga-the-international-by-tunga-blossom-15.jpg" alt="">

        </div>

        <div class="image">

          <img class="img4" src="https://www.abbylighting.com/static/uploads/1544525104-IMG20180908WA0003jpg.jpg" alt="">

        </div>

      </div>

    </div>

  </div>
  <!----------------Dining image slider Ends--------------------->

<!--------------------------Section 5----------------------------->

 <h1 class="div3" style="text-align: center;" data-aos="fade-up" >Special Offers</h1><br><br><br>

    <div id="offers" data-aos="fade-up" >

    <div class="myimage10" data-aos="fade-right">

      <div>

       <img class="p1" id="btnId"  src="https://tse3.mm.bing.net/th?id=OIP.o5dkUgDdFkAjJZdj8_JsygHaK5&pid=Api&P=0" height="450px" width="550px">

      </div>
     
      <div class="myicon">

        <i class="fa fa-plus" aria-hidden="true" style="color:#ffdf00;border:2px solid white;border-radius: 50%;font-size:x-large;position: absolute;padding:18px;"></i>

      </div>

      </div>

          <div class="myimage11" data-aos="fade-left"> 

            <div>    

            <img class="p1"  id="btnId" src="https://img.freepik.com/free-vector/music-event-banner-template-with-photo_52683-13691.jpg?size=626&ext=jpg" height="450px" width="550px">

          </div>

          <div class="myicon">

            <i class="fa fa-plus" aria-hidden="true" style="color:#ffdf00;border:2px solid white;border-radius: 50%;font-size:x-large;position: absolute;padding:18px;"></i>

          </div>

          </div>

          </div>   <br><br><br><br>

<!---------------------------Section 6---------------------------------> 
<h1 class="div3" data-aos="fade-up" >Our Gallery</h1><br><br>

<div class="gall" data-aos="fade-up">

    <div class="gallery">

        <div class="gallery1">

            <img src="https://i.pinimg.com/originals/be/4f/af/be4fafe9823889e91e459d8495aec69f.jpg" alt="img"   height="400px" width="500px">
      
            <p class="gallerypara">Hotel Exterior <br>The Paradise</p>

        </div>
    
        <div class="gallery2">

            <img src="https://i.pinimg.com/originals/d5/0e/5d/d50e5d28b5519e3a243c1889664cd58a.jpg" alt="img"  height="400px" width="500px">
            
            <p  class="gallerypara">Hotel Interior<br>The Paradise</p>

        </div>

        <div class="gallery1">

            <img src="http://coveteur.com/wp-content/uploads/2018/03/london-regent-street-best-restaurants-2.jpg" alt="img"  height="400px" width="500px">

            <p  class="gallerypara">Our Restaurant<br>The Paradise</p>

        </div>

        <div class="gallery2">

            <img src="https://www.musicconcierge.co.uk/wp-content/uploads/2018/05/Merchants-Tavern.jpg" alt="img" height="400px" width="500px">

            <p  class="gallerypara">Pickle and Pint Bar<br>The Paradise</p>

        </div>

        <div class="gallery1">

            <img src="http://www.tungahotels.com/images/tunga/paradise/paradise-executive.jpg" alt="img" height="400px" width="500px" >
            
            <p  class="gallerypara">Serenity Rooms<br>The Paradise</p>
            
      </div>

      <div class="gallery2">

            <img src="http://www.tungahotels.com/images/tunga/paradise/paradise-deluxe.jpg" alt="img" height="400px" width="500px">

            <p  class="gallerypara">Majesta Rooms<br>The Paradise</p>

     </div>

     <div class="gallery1">

            <img src="http://www.tungahotels.com/images/tunga/paradise/gallery/gallery12-1.jpg" alt="img" height="400px" width="500px">

            <p  class="gallerypara">Pickle and Pint Bar<br>The Paradise</p>

     </div>

    <div class="gallery2">

            <img src="http://www.tungahotels.com/images/tunga/paradise/pickle-kitchen-bar.jpg" alt="img" height="400px" width="500px">

            <p  class="gallerypara">Pickle and Pint-Kitchen Bar<br>The Paradise</p>

    </div>

    <div class="gallery1">

            <img src="http://img1.10bestmedia.com/Images/Photos/261475/new-RCTORON-00095_54_990x660.jpg" alt="img" height="400px" width="500px">

            <p  class="gallerypara">Pickle and Pint Open Loudge<br>The Paradise</p>

    </div>

    <div class="gallery2">

            <img src="https://i.pinimg.com/originals/6b/3f/55/6b3f55c8b4cf92926c21ae6dbc973e94.jpg" alt="img" height="400px" width="500px"> 

            <p  class="gallerypara">Hotel Entrance<br>The Paradise</p>

    </div>

    <div class="gallery1">

            <img src="https://i.pinimg.com/originals/d6/3e/11/d63e11e3590f750a81c6fe4b84addda5.jpg" alt="img" height="400px" width="500px">

            <p  class="gallerypara"><br>The Paradise</p>

    </div>

    <div class="gallery2">

            <img src="https://i.pinimg.com/originals/76/a8/1e/76a81e7675e88803bd0990862af65a12.jpg" alt="img" height="400px" width="500px">

            <p  class="gallerypara"><br>The Paradise</p>

    </div>

    <div class="gallery1">

          <img src="http://www.tungahotels.com/images/tunga/paradise/pickle-bar.jpg" alt="img" height="400px" width="500px">

          <p  class="gallerypara"><br>The Paradise</p>

    </div>

  </div>

</div>

<!--------------------------Section 7---------------------------------->

<br><br><br>
<h4 style="letter-spacing: 2px;text-align:center;color:darkcyan;margin-top:20px;">OUR REVIEWS</h4>

  <h1 class="div3" data-aos="fade-up" >What Our Guests Say</h1>


<div class="dinning" data-aos="fade-up">

  <div class="container">

    <div class="image-box">

      <div class="image review">

              <h1 class="review">Pleasant stay</h1>

              <p class="reviewpara">"The total stay was flawless and pleasant, the staff was very kind and helpful. The room is clean, food is good, nothing to say anything negative. Thanks, staff especially to Ms. Sneha who well guided to good places for shopping. Cheers."</p>

      </div>

      <div class="image  review">

              <h1 class="review">Best Service , Awesome Food</h1>

              <p class="reviewpara">"Writing this review sitting in paradise by Tunga hotel. Food is awesome, service is very fast. Hotel staff is also very supportive Value for money deal."</p>

      </div>

      <div class="image  review">

              <h1 class="review">Good Experience</h1>

              <p class="reviewpara">"It is very nice to be in this place .near to the airport. we got pickup drop also driver was good. Breakfast was good. Neat and clean for once we can stay there. The ambiance is good. Staffs were very good friendly."</p>
      </div>

      <div class="image  review">

              <h1  class="review">Good Buisness Hotel</h1>

              <p class="reviewpara">"This is what I had expected. The rooms are clean, the bathroom is very clean. The service is quick and without a fuss. The buffet breakfast is sufficient. Not breathtaking but has enough items that you would like."</p>

      </div>

    </div>

      <div class="image  review">

                <h1  class="review">Good Buisness Hotel</h1>

                <p class="reviewpara">"This is what I had expected. The rooms are clean, the bathroom is very clean. The service is quick and without a fuss. The buffet breakfast is sufficient. Not breathtaking but has enough items that you would like."</p>

      </div>

    </div>

  </div>

</div>

<!----------------------------Section 8---------------------------------->

<div class="contact" id="contact">

  <div>

     <h1 class="div3" data-aos="fade-up" >Find Us On Map</h1><br>

  </div>

  <div class="info">

  <div>

              <p><b>The Paradise</b></p>

              <p>P 16, MIDC Central Road, Andheri East, Mumbai 400093.</p>

              <p><b>Phone: </b>+91-22-6789-8900</p>

              <p><b>Fax:</b> +91-22-2821-7060</p>

              <p><b>Email:</b> paradise@tungahotels.com</p>

   </div>

   <div style="margin-top:20px;">

                <p><b>Delhi Sales Office:</b></p>

                <p><b>Moonlight Luxury Accommodations Pvt Ltd</b></p>

                <p></p>514, Aditya Tower, Laxmi Nagar District Center, Delhi – 110 092.

                <p>Phone: 011-42384490, 22501535, 22501536</p>

                <p>Cell: 99714 91414, 99108 92226</p>

                <p>Email: tunga@moonlighthotels.com</p>

   </div><br><br><br>

   <div style="color:#014421;font-size:35px;">3.8 km</div><hr>

    <div style="font-size:19px">INTERNATIONAL AIRPORT</div><br>

    <div style="color:#014421;font-size:35px;">4.6 km</div><hr>

     <div style="font-size:19px">DOMESTIC AIRPORT</div><br>

     <div style="color:#014421;font-size:35px;">9.4 km</div><hr>

     <div style="font-size:19px">BOMBAY EXHIBITION CENTER</div><br>

     <div style="color:#014421;font-size:35px;">8.4 km</div><hr>

     <div style="font-size:19px">BANDRA KUNDRA COMPLEX</div><br>

</div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.697644632333!2d72.86777077442999!3d19.120915750562464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c823427a2de7%3A0x39dbf8a81eb74aef!2sThe%20Paradise%20By%20Tunga!5e0!3m2!1sen!2sin!4v1683626042627!5m2!1sen!2sin" width="650" height="580" style="border:0;margin-top:50px;margin-left: 40px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>


</div>


<!----------------------Section 9----------------------->
<div><br><br><br><br>

  <p style=" font-size:23px;font-family: 'Alegreya SC', serif; text-align:center;color:#014421;">The Tunga Hotels have been creating a legacy of their own in the world of Hospitality for the last three decades</p> <hr>

</div>

<!------------------Floating Icons---------------------->

<div class="icons">

  <ul>

    <a href="https://www.facebook.com/TheParadiseByTungaHotels/"><li class="facebook"><i class="fa-brands fa-lg fa-facebook"></i></li></a>

    <a href="https://www.instagram.com/tungaparadise/?hl=en"><li class="instagram"><i class="fa-brands fa-lg fa-instagram"></i></li></a>

    <a href="https://www.youtube.com/@HotelsDirectory"><li class="youtube"><i class="fa-brands fa-lg fa-youtube"></i></i></li></a>

    <a href="https://twitter.com/tunga_hotels?lang=en"><li class="twitter"><i class="fa-brands fa-lg fa-twitter"></i></i></li></a>

  </ul>

</div>

   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

   <script>

    AOS.init();

   </script>
 </body>
</html> 