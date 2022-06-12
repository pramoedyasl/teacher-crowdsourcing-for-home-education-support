<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="styleAbout.css">
    <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

  </head>
  <style>
      body{
        background: url('<?php echo base_url();?>assets/img/BG.png'); 
        background-size:100%; 
        background-repeat: no-repeat; 
        width: 100%; 
      }
      </style>
  <body>
    <div class="about-section">
      <div class="inner-container">
        <h1> About Us</h1>
        <p class="text1">
          LETSTUDY...
          GREAT SERVICE, 
          PROFESSIONAL SUPPORT FOR YOUR CHILD
        </p>
        <p class="text">
          LetStudy is a crowdsourcing web app that aims to help parents who cannot accompany their children in the learning process.
          Consult the profiles freely and contact your ideal tutor according to your criteria (prices, diploma, opinion, home or webcam course).
          You can Talk to your tutor to explain your needs and availability. Schedule your lessons and pay them securely, all from your inbox
           <a class="nav-link link-navbar tebel-sedang" a href="<?= site_url('auth/showhome') ?>">Back</a></p>
        </p>
      </div>
    </div>
  </body>
</html>