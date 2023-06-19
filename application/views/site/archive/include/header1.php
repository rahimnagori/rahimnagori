<!DOCTYPE html>
<html lang="en">
<?php
  $PROJECT = $this->config->item('PROJECT');
  $BASE_URL = $this->config->item('base_url');
?>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title><?=$PROJECT;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/animate.css">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/magnific-popup.css">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/aos.css">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/ionicons.min.css">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/jquery.timepicker.css">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/flaticon.css">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/icomoon.css">
<link rel="stylesheet" href="<?=$BASE_URL;?>assets/site/css/style.css?=2">
<script>
  let base_url = "<?=$BASE_URL;?>";
</script>

<style type="text/css">
	@media only screen and (max-width: 480px){
.banner_section .hero-wrap.js-fullheight {
    border-radius: 30px !important;
    height: 300px !important;
    overflow: hidden;
    position: relative;
}
.slider-text p {
    font-size: 18px;
    width: 80%;
    font-weight: 300;
    color: #fff;
    opacity: 1 !important;
    display: none;
    margin: 0 auto;
}
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-trans ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="<?=$BASE_URL;?>">
      <img src="<?=$BASE_URL;?>assets/site/images/logo2.png" class="logo1">
      <img src="<?=$BASE_URL;?>assets/site/images/logo2.png" class="logo2">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a href="<?=$BASE_URL;?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="<?=$BASE_URL;?>Community" class="nav-link">Community</a>
          <ul class="submenu">
            <li class="nav-item submenu_item"><a href="<?=$BASE_URL;?>Community" class="nav-link">Collabs</a></li>
            <li class="nav-item submenu_item"><a href="<?=$BASE_URL;?>Community" class="nav-link">Contest</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="<?=$BASE_URL;?>Sounds" class="nav-link">Sounds</a>
          <ul class="submenu">
            <li class="nav-item submenu_item"><a href="<?=$BASE_URL;?>Sounds" class="nav-link">Genre</a></li>
            <li class="nav-item submenu_item"><a href="<?=$BASE_URL;?>Sounds" class="nav-link">Type Beat</a></li>
            <li class="nav-item submenu_item"><a href="<?=$BASE_URL;?>Sounds" class="nav-link">Producer</a></li>
            <li class="nav-item submenu_item"><a href="<?=$BASE_URL;?>Sounds" class="nav-link">Beats & Hooks</a></li>
            <li class="nav-item submenu_item"><a href="<?=$BASE_URL;?>Sounds" class="nav-link">Syncs for Tv</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="<?=$BASE_URL;?>Blogs" class="nav-link">Blog</a>
          <ul class="submenu">
            <li class="nav-item submenu_item"><a href="<?=$BASE_URL;?>Blogs" class="nav-link">Tip's and How to's</a></li>
            <li class="nav-item submenu_item"><a href="<?=$BASE_URL;?>Blogs" class="nav-link">Giving Game</a>
            </li>
          </ul>
        </li>
        <li class="nav-item cta"><a href="#" class="nav-link" data-toggle="modal" data-target="#myModal"><span>Log In</span></a></li>
        <li class="nav-item cta"><a href="#" class="nav-link" data-toggle="modal" data-target="#signupModal"><span>Sign Up</span></a></li>
      </ul>
    </div>
  </div>
</nav>