<?php
include_once'include/header.php';
?>

<section class="ftco-section ftco-counter img img_counter2" id="section-counter" style="background-image: url(<?=$BASE_URL;?>assets/site/images/back.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-4 community_heading">Contact Us</h2>
        <span class="subheading">Provide your information below</span>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-destination" style="padding: 3em 0 0;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form method="POST" id="contact_request_form" name="contact_request_form" onsubmit="send_contact_request(event);" >
          <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enter your name" required >
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Mobile No.</label>
            <input type="number" name="phone" class="form-control" aria-describedby="emailHelp" placeholder="Enter your mobile no." required>
          </div>
           
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Message</label>
            <textarea name="message" class="form-control" required ></textarea>
          </div>

          <div id="contactResponseMessage" > </div>
          <div class="col-md-12 text-center ">
            <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm btn-submit">Submit</button>
          </div>

        </form>
        <br/>
      </div>
    </div>
  </div>
</section>

<?php
include_once'include/footer.php';
?>

<script>
  function send_contact_request(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: base_url + "Request/add",
      data: new FormData($('#contact_request_form')[0]),
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function() {
        $("#contactResponseMessage").html("");
        $(".btn-submit").prop('disabled', true);
        $(".btn-submit").html('<i class="fa fa-spin fa-spinner"></i> Processing...');
      },
      success: function(response) {
        if (response.status == 1) {
          $("#contact_request_form")[0].reset();
        }
        $(".btn-submit").prop('disabled', false);
        $(".btn-submit").html('Submit');
        $("#contactResponseMessage").html(response.contactResponseMessage);
        window.location.href = '#contactResponseMessage';
      }
    })
  }
</script>