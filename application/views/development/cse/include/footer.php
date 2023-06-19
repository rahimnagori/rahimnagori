<footer class="footer_sec" data-aos="fade-up" data-aos-duration="2000">
  <div class="container">
    
    <div class="row">
      <div class="col-sm-4">
        <div class="flin1">
          <h4>About Us</h4>
          <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit posuere diam facilisis metus ultricies tristique. Vestibulum feugiat gravida imperdiet suspendisse auctor duis ornare accumsan.  
          </p>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-4">
            <div class="flin1">
                <h4>Quick Link</h4>
                <div class="link">
                  <span><a href="#">Home</a></span>
                  <span><a href="#">Courses</a></span>
                  <span><a href="#">Jackpot Offer</a></span>
                  <span><a href="#">Contact Us</a></span>
                </div>
              </div>
          </div>
          <div class="col-sm-4">
            <div class="flin1">
                <h4>Legal Stuff</h4>
                <div class="link">
                  <span><a href="#">Terms & Conditions</a></span>
                  <span><a href="#">Privacy Policy</a></span>
                  <span><a href="#">Refund/Cancellation Policy</a></span>
                </div>
              </div>
          </div>
          
          <div class="col-sm-4">
            <div class="flin1">
                <h4>Social Media</h4>
                <div class="soclall">
                    <span><a href="https://api.whatsapp.com/send?phone=919686081839" target="_blank"><i class="fa fa-whatsapp"></i> Whatsapp</a></span>
                    <span><a href="https://www.facebook.com/csepracticals/" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></span>
                    <span><a href="https://t.me/telecsepracticals" target="_blank"><i class="fa fa-telegram"></i> Telegram</a></span>
                    <span><a href="https://www.youtube.com/c/CSEPracticals" target="_blank"><i class="fa fa-youtube-play"></i> Youtube</a></span>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copy">
    <div class="container">
      <div class="row">
        <div class="col-sm-6"><img src="<?=site_url('assets/development/cse/');?>img/img19.png" style="width: 140px;"></div>
        <div class="col-sm-6 txt_c"><span>Design & Developed by</span></div>
      </div>
    </div>
  </div>
</footer>

<div class="social_fix">
  <ul class="ul_set">
    <li class="wp"><a href="https://api.whatsapp.com/send?phone=919686081839" target="_blank"><i class="fa fa-whatsapp"></i> </a></li>
     <li class="telg"><a href="https://t.me/telecsepracticals" target="_blank"><i class="fa fa-telegram"></i> </a></li>
  </ul>
</div>





<script type="text/javascript" src="<?=site_url('assets/development/cse/');?>js/jquery.min.js"></script>

<script type="text/javascript" src="<?=site_url('assets/development/cse/');?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets/development/cse/');?>js/owl.carousel.js"></script>

<script type="text/javascript" src="<?=site_url('assets/development/cse/');?>js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?=site_url('assets/development/cse/');?>js/custom.js"></script>

<script type="text/javascript">
  $('.extent_tbl1').DataTable();
</script>

<!-- Modal -->

<div class="modal fade " id="widddrol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

     <div class="modal-header">

      <h4 class="modal-title">Content</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="la la-times-circle"></i></span></button>

        

      </div>

      <div class="modal-body" style="padding: 10px;">
        <div class="course_b3">
          <ul class="ul_set">
          <li>Linux Kernel Modules</li>
          <li>Netlink Sockets</li>
          <li>Concept of TLVs</li>
          <li>User Space and Kernel Space Communication</li>
          <li>Multicast from Kernel Space to UserSpace</li>
          <li>Linux Kernel Modules</li>
          <li>Netlink Sockets</li>
          <li>Concept of TLVs</li>
          </ul>
        </div>

      </div>

      

    </div>

  </div>

</div>



<!-- Modal close-->

<script type="text/javascript">
  $(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
      e.preventDefault();
      var target = this.hash;
      var $target = $(target);
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
          // window.location.hash = target;
      });
  });
});
</script>

 </body>

</html>



