<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Auxhole</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
						<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4 ml-md-5">
					<h2 class="ftco-heading-2">Information</h2>
					<ul class="list-unstyled">
						<li><a href="<?=$BASE_URL;?>About" class="py-2 d-block">About</a></li>
						<li><a href="<?=$BASE_URL;?>Service" class="py-2 d-block">Service</a></li>
						<li><a href="<?=$BASE_URL;?>Terms" class="py-2 d-block">Terms and Conditions</a></li>
						<li><a href="<?=$BASE_URL;?>Partner" class="py-2 d-block">Become a partner</a></li>
						<li><a href="<?=$BASE_URL;?>Price" class="py-2 d-block">Best Price Guarantee</a></li>
						<li><a href="<?=$BASE_URL;?>Policy" class="py-2 d-block">Privacy and Policy</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Customer Support</h2>
					<ul class="list-unstyled">
						<li><a href="<?=$BASE_URL;?>Faqs" class="py-2 d-block">FAQ</a></li>
						<li><a href="<?=$BASE_URL;?>Payment" class="py-2 d-block">Payment Option</a></li>
						<li><a href="<?=$BASE_URL;?>Tips" class="py-2 d-block">Booking Tips</a></li>
						<li><a href="<?=$BASE_URL;?>Works" class="py-2 d-block">How it works</a></li>
						<li><a href="<?=$BASE_URL;?>Contact" class="py-2 d-block">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Have a Questions?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, USA</span></li>
							<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
							<li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="b4dddad2dbf4cddbc1c6d0dbd9d5ddda9ad7dbd9">Johndoe@gmail.com</span></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<!--
        <p>
					Copyright &copy;<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">document.write(new Date().getFullYear());</script> All rights reserved</a>
				</p>
        -->
			</div>
		</div>
	</div>
</footer>

<!-- Modal -->
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
        <div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h4>Login</h4>
						 </div>
					</div>
          <form id="login_form" name="login_form" method="POST" onsubmit="login_new(event);" >
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" name="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" required >
            </div>
            <div class="form-group" style="display:none;">
              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
            </div>
            <div id="responseMessage"></div>
            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm btn-login">Login</button>
            </div>
          </form>
            <br>
            <div class="form-group">
              <p class="text-center"><a data-dismiss="modal" data-toggle="modal" data-target="#forgotPasswordModal">Forgot Password?</a></p>
            </div>

            <div class="col-md-12 ">
              <div class="login-or">
                 <hr class="hr-or">
                 <span class="span-or">or</span>
              </div>
            </div>
          
            <div class="form-group">
              <p class="text-center">Don't have account? <a id="signup" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">Sign up here</a></p>
            </div>
				</div>
			</div>
        </div>
      </div>
      
    </div>
  </div>

   <div class="modal fade" id="signupModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
          	<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h4>Sign Up</h4>
						 </div>
					</div>
          <form id="signup_form" name="signup_form" onsubmit="signup(event);" >
            <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input type="text" name="first_name" class="form-control" aria-describedby="emailHelp" placeholder="Enter your first name" required >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name</label>
              <input type="text" name="last_name" class="form-control" aria-describedby="emailHelp" placeholder="Enter your last name" required >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Mobile No.</label>
              <input type="number" name="phone" class="form-control" aria-describedby="emailHelp" placeholder="Enter your mobile no." required >
           </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" id="password" name="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" required >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Confirm Password</label>
              <input type="password" id="confirm_password" name="confirm_password" class="form-control" aria-describedby="emailHelp" placeholder="Confirm Password" required >
            </div>
            <div id="signupResponseMessage"></div>

            <div class="form-group">
              <p class="text-center">By signing up you accept our <a href="<?=$BASE_URL;?>Terms">Terms Of Use</a></p>
            </div>
            <div class="col-md-12 text-center ">
              <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm signup btn-signup">SUBMIT</a>
            </div>
            <div class="col-md-12 ">
              <div class="login-or">
                <hr class="hr-or">
                <span class="span-or">or</span>
              </div>
            </div>

            <div class="form-group">
              <p class="text-center">You already have account? <a id="signup" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Login here</a></p>
            </div>
          </form>
                 
				</div>
			</div>
        </div>
      </div>
      
    </div>
  </div>

  <!-- forgot Modal -->
  <div class="modal fade" id="forgotPasswordModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
        <div id="first">
        <div class="myform form ">
           <div class="logo mb-3">
             <div class="col-md-12 text-center">
              <h4>Forgot Password</h4>
             </div>
          </div>
          <form id="forget_form" name="forget_form" method="POST" onsubmit="reset_password(event);" >
             <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required >
             </div>
             <div class="col-md-12 text-center ">
              <div id="forgotresponseMessage"></div>
              <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm btn-submit">Submit</button>
             </div>
          </form>
        </div>
      </div>
        </div>
      </div>
      
    </div>
  </div>

   <div class="modal fade" id="signupModal_old" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
            <div id="first">
        <div class="myform form ">
           <div class="logo mb-3">
             <div class="col-md-12 text-center">
              <h4>Sign Up Old</h4>
             </div>
          </div>
         <form action="" method="post" name="login_old">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" name="email"  class="form-control"  aria-describedby="emailHelp" placeholder="Enter your name">
                 </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No.</label>
                    <input type="text" name="email"  class="form-control"  aria-describedby="emailHelp" placeholder="Enter your mobile no.">
                 </div>
                   
                 <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email"  class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
                 </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password"   class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                 </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Password</label>
                    <input type="password" name="password"   class="form-control" aria-describedby="emailHelp" placeholder="Confirm Password">
                 </div>

                 <div class="form-group">
                    <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                 </div>
                 <div class="col-md-12 text-center ">
                    <a href="#" type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Sign up</a>
                 </div>
                 <div class="col-md-12 ">
                    <div class="login-or">
                       <hr class="hr-or">
                       <span class="span-or">or</span>
                    </div>
                 </div>
                
                 <div class="form-group">
                    <p class="text-center">You already have account? <a id="signup" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Login here</a></p>
                 </div>
              </form>
                 
        </div>
      </div>
        </div>
      </div>
      
    </div>
  </div>



<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<script src="<?=$BASE_URL;?>assets/site/js/jquery.min.js" type="text/javascript"></script>
<script src="<?=$BASE_URL;?>assets/site/js/jquery-migrate-3.0.1.min.js" type="text/javascript"></script>
<script src="<?=$BASE_URL;?>assets/site/js/popper.min.js" type="text/javascript"></script>
<script src="<?=$BASE_URL;?>assets/site/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=$BASE_URL;?>assets/site/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?=$BASE_URL;?>assets/site/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="<?=$BASE_URL;?>assets/site/js/jquery.stellar.min.js" type="text/javascript"></script>
<script src="<?=$BASE_URL;?>assets/site/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?=$BASE_URL;?>assets/site/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="<?=$BASE_URL;?>assets/site/js/aos.js" type="text/javascript"></script>
<script src="<?=$BASE_URL;?>assets/site/js/jquery.animateNumber.min.js" type="text/javascript"></script>
<script src="<?=$BASE_URL;?>assets/site/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!--
<script src="<?=$BASE_URL;?>assets/site/js/jquery.timepicker.min.html" type="text/javascript"></script>
-->
<script src="<?=$BASE_URL;?>assets/site/js/scrollax.min.js" type="text/javascript"></script>
<!--
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false" type="text/javascript"></script>
-->
<!--
<script src="<?=$BASE_URL;?>assets/site/js/google-map.js" type="text/javascript"></script>
-->
<script src="<?=$BASE_URL;?>assets/site/js/main.js" type="text/javascript"></script>

<!--
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="text/javascript"></script>
-->
<script type="text/javascript">
  // window.dataLayer = window.dataLayer || [];
  // function gtag(){dataLayer.push(arguments);}
  // gtag('js', new Date());

  // gtag('config', 'UA-23581568-13');
</script>
<!--
<script src="<?=$BASE_URL;?>assets/site/js/rocket-loader.min.js" data-cf-settings="|49" defer=""></script>
<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"5c53d586aa8edf3a","version":"2020.7.0","si":10}'></script>
-->
<script>
  let email_verified = parseInt("<?=($this->session->flashdata('email_verified')) ? 1 : 0;?>");
  if(email_verified){
    $("#responseMessage").html('<?=$this->session->flashdata("email_verified");?>');
    $('#loginModal').modal('show');
  }
  function signup(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: base_url + 'Users/signup',
      data: new FormData($('#signup_form')[0]),
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function () {
        $("#signupResponseMessage").html("");
        $(".btn-signup").prop('disabled', true);
        $(".btn-signup").html('<i class="fa fa-spin fa-spinner"></i> Processing...');
      },
      success: function (response) {
        $("#signupResponseMessage").html(response.responseMessage);
        if (response.status == 1) {
          $('#signup_form')[0].reset();
        }
        $(".btn-signup").prop('disabled', false);
        $(".btn-signup").html('Submit');
      }
    })
  }

  function login_new(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      dataType : 'JSON',
      url: base_url + "Users/login",
      data: new FormData($('#login_form')[0]),
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function() {
        $("#responseMessage").html("");
        $(".btn-login").prop('disabled', true);
        $(".btn-login").html('<i class="fa fa-spin fa-spinner"></i> Processing...');
      },
      success: function(response) {
        $("#responseMessage").html(response.responseMessage);
        if(response.status == 1){
          $("#login_form")[0].reset();
          window.location.href = response.redirect;
        }
        $(".btn-login").prop('disabled', false);
        $(".btn-login").html('LOGIN');
      }
    })
  }

  function reset_password(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: base_url + "Users/reset_password",
      data: new FormData($('#forget_form')[0]),
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function() {
        $("#forgotresponseMessage").html("");
        $(".btn-submit").prop('disabled', true);
        $(".btn-submit").html('<i class="fa fa-spin fa-spinner"></i> Processing...');
      },
      success: function(response) {
        if (response.status == 1) {
          $("#forget_form")[0].reset();
        }
        $(".btn-submit").prop('disabled', false);
        $(".btn-submit").html('Send Request');
        $("#forgotresponseMessage").html(response.responseMessage);
      }
    })
  }
</script>

<script type="text/javascript">
  $(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    // Variables privadas
    var links = this.el.find('.link');
    // Evento
    links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
  }

  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el;
      $this = $(this),
      $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if (!e.data.multiple) {
      $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
    };
  } 

  var accordion = new Accordion($('#manuu_dow'), false);
});

</script>
<script type="text/javascript">
  $(document).ready(function(){
  $("#man_btn").click(function(){
    $("#ftco-nav").toggleClass("main_nass");
  });
});
</script>
</body>


</html>