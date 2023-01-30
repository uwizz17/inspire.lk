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

      <section id="sub-page" class="contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9536217603477!2d79.87368286661832!3d6.896150963285192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a2ad807944d%3A0x3846e9d52b1618b!2sThimbirigasyaya%20Rd%2C%20Colombo%2000500!5e0!3m2!1sen!2slk!4v1645523716548!5m2!1sen!2slk" width="100%" height="550" style="border:0;" allowfullscreen="" frameborder="0" loading="lazy"></iframe>
      </section> 

      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-7 col-xl-6">
              <div class="contact-left">
                <h3>Send us your inquiry</h3>
              <form>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Your Email">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Phone Number">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Nationality">
                </div>
                <div class="mb-3">
                 
                  <textarea class="form-control" rows="3" placeholder="Requests & Remarks"></textarea>
                </div>
                <div class="d-grid gap-2">
                  <button class="btn btn-read-more" type="button">Send Message</button>
                 
                </div>
              </form>
              </div>
            </div>
            <div class="col-lg-5 col-xl-6">
              <div class="contact-right">
                <h3>Contact info</h3>
                <div class="contact-box">
                  <p>
                    <span>Phone:</span>
                    <span>+94 77 304 1595</span>
                 
                  </p>
                  <p>
                    <span>Email:</span>
                    <span>info@seasonsholidays.lk</span>
                  </p>
                  <p class="mb-0">
                    <span>Address:</span>
                    <span>
                      45 Colombo 10, <br> Sri Lanka</span>
                  </p>
                </div>
              </div>
            </div>
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