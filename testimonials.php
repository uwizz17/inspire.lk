<?php include 'includes/header.php'; ?>
<section class="body-wrapper"> 
    <!-- <div class="right-sidebar">

   
    <div class="button_container" id="toggle">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
    </div>

    <div class="sidebar-menu">
      <div class="right-img">
        <img src="img/icons/binocular.png" alt="">
      </div>
      <div class="right-img">
        <img src="img/icons/hiking.png" alt="">
      </div>
      <div class="right-img">
        <img src="img/icons/hotel.png" alt="">
      </div>
      <div class="right-img">
        <img src="img/icons/car.png" alt="">
      </div>
      <div class="right-img no-border">
        <img src="img/icons/open.png" alt="">
      </div>
    </div>

    </div> -->
    
    <div class="overlay" id="overlay">
      <nav class="overlay-menu">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Work</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>

      <section id="sub-page" class="sub-5">
        <div class="slider-center">
          <div class="slide-text">
            <h2>Testimonials </h2>
           <!-- <p class="btn btn-common btn-common-red">Explore Sri Lanka</p> -->
          </div>
       </div>
      </section> 

      <section class="attraction-wrap">
        <div class="container">
          <div class="attr1">
            <h3>Heading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <!---  <div class="row">
              <div class="col-lg-4">
                <img src="img/attraction/a1.jpg" class="w-100" alt="">
              </div>
              <div class="col-lg-4">
                <img src="img/attraction/a2.jpg" class="w-100" alt="">
              </div>
              <div class="col-lg-4">
                <img src="img/attraction/a3.jpg" class="w-100" alt="">
              </div>
            </div> -->
          </div>

        </div>
      </section>

      <footer class="footer-bg">
        <div class="container">
          <div class="row footer-lg">

            <div class="col-lg-6">
              <div class="contact-box">
                <h3>SEND US A MESSAGE</h3>
                <form>
                  <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Your Name">
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Your Email">
                  </div>
                  <div class="mb-3">
                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-readmore">Send</button>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="footer-content-1">
                <h3>TALK TO US</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto labore harum cumque impedit, consequatur eveniet quos numquam. Quos dolorum deleniti rem repellat praesentium quis, sit omnis deserunt.</p>
                <div class="footer-contact d-flex">
                 
                  <p><i class="fas fa-phone-alt"></i> +94 77 304 1595</p>
                  <p><i class="far fa-envelope"></i> info@seasonsholidays.lk</p>
                 </div>
              <div class="social-icons">
                <img src="img/social-icons/facebook.png" alt="">
                <img src="img/social-icons/twitter.png" alt="">
                <img src="img/social-icons/youtube.png" alt="">
                <img src="img/social-icons/instagram.png" alt="">
              </div>
              </div>
            </div>


            <div class="col-lg-12">
              <p class="text-center mb-0 copyright">Copyright ©2022 Inspire Holidays (Pvt) Ltd. Web Design By <a href="">Web Design Sri Lanka</a></p>
            </div>
          </div>
        </div>
      </footer>

    </section>
     
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script>
      $(document).ready(function(){
      var $prev = $('.previousx');
      var $next = $('.nextx');
      var mode = "auto";
      $prev.on({
          click: function(e){
          e.preventDefault();
          mode = "auto";
          showPreviousImage();
          }
      });
      $next.on({
          click: function(e){
          e.preventDefault();
          mode = "auto";
          showNextImage();
          }
      });
      setInterval(function(){
          if(mode==="auto"){
          showNextImage();
          }
      },3000);
      function showNextImage(){
          var $actEl = $('.activx');
          var $nextEl = $actEl.next('.slidex');
          if($nextEl.length){
              $actEl.removeClass('activx');
              $nextEl.addClass('activx');
          }else{
              $actEl.removeClass('activx');
              $('.slidex:first-child').addClass('activx');
          }
      }
      function showPreviousImage(){
          var $actEl = $('.activx');
          var $prevEl = $actEl.prev('.slidex');
          if($prevEl.length){
              $actEl.removeClass('activx');
              $prevEl.addClass('activx');
          }else{
              $actEl.removeClass('activx');
              $('.slidex.last').addClass('activx');
          }
          }
      });
  </script>
<script>
  $('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>
  $('.popular-places').owlCarousel({
    loop:true,
    margin:5,
    dots: false,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    nav:true,
    navText : ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>
<script>
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 50) {
        //clearHeader, not clearheader - caps H
        $(".nav-link-wrapper").addClass("out");
    }
    else {
      $(".nav-link-wrapper").removeClass("out");
    }
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.js"> </script>
<script>
  $('.popular-tours-wrapper').ripples({
      resolution: 512,
      dropRadius: 20,
      perturbance: 0.04,
      });
</script>
  </body>
</html>