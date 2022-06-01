<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
    <link rel="stylesheet" href="assets/css/body.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/responsive.css">


    

    <title>Landing Page</title>
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
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="js/bootstrap.js"></script></script>
        
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
    <?php if(isset($_SESSION['success'])){ ?>
    <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
    <?php
    } ?>
    <?php echo validation_errors('<div class="alert alert-danger">','</div>') ?>
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?php echo base_url();?>assets/vector-logo.png" height="150px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expended="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link link-navbar tebel-sedang" href="<?= site_url('auth/showabout') ?>">ABOUT &nbsp;&nbsp;</a>
            </li>
          </ul>
        </div>
             <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
          <ul class="nav nav-pills">
            </li>
            <li class="nav-item">
              <a href="<?= site_url('auth/showlogin') ?>" class="button rounded-pill shadow tebel-sedang">LOG IN </a>
            &nbsp;
            </li>
            <li class="nav-item">
                <a href="<?= site_url('auth/register') ?>" class="button rounded-pill shadow tebel-sedang">SIGN UP </a>
            &nbsp;
          </ul>
        </div>
            
    </nav>
    <div class="container">

      <br><br><br>

      <div class="row mt-5 mb-5">

        <div class="col-lg-12 gambar">
          <img src="<?php echo base_url('assets/vector-saly.png'); ?>" height="100px"/>
         
        </div>
        

        <div class="col-sm-12 position-relative p-4">

          <h1 class="display-1 text-truncate tebel-banget">SUPPORT YOUR CHILD'S</h1>
          <h1 class="display-1 text-truncate tebel-banget">EDUCATION</h1>
          <h1 class="display-1 text-truncate tebel-banget">WITH US</h1>

          <div class="desc mt-4">
            <p>LET'Study is crowdsourcing web app that will help you and your children</p>
          </div>

          <div class="mt-5">
            <a href="<?= site_url('COBAAAA/Crud/index') ?>" class="button rounded-pill shadow tebel-sedang">Hire a Teacher</a>
            &nbsp;
            <a href="#" class="button rounded-pill shadow tebel-sedang">Earn Money Teaching</a>
            <br>
          </div>
    <!-- konten -->
    
    <div class="container-fluid" id="card-car" style="margin-bottom: 10%;padding-top: 10%;">
    <h2> TEACHERS </h2>
        <div class=" row">

            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo base_url();?>assets/img/reynaa.jpg" class="card-img-top" style="height: 200px">
                    <div class="card-body">
                        <h5 class="card-title">Reyna</h5>
                        <p class="card-text">Forged in the heart of Mexico, Reyna dominates single combat, popping off with each kill she scores. 
                          Her capability is only limited by her raw skill, making her highly dependent on performance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo base_url();?>assets/img/sovaa.jpg" class="card-img-top" alt="car2" style="height: 200px">
                    <div class="card-body">
                        <h5 class="card-title">Sova</h5>
                        <p class="card-text">Born from the eternal winter of Russia's tundra, Sova tracks, finds, and eliminates enemies with ruthless efficiency and precision. 
                          His custom bow and incredible scouting abilities ensure that even if you run, you cannot hide.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo base_url();?>assets/img/kj.jpg" class="card-img-top" alt="car3" style="height: 200px">
                    <div class="card-body">
                        <h5 class="card-title">Killjoy</h5>
                        <p class="card-text">The genius of Germany. Killjoy secures the battlefield with ease using her arsenal of inventions. 
                          If the damage from her gear doesn't stop her enemies, her robots' debuff will help make short work of them.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url();?>assets/img/cypherr.jpg" class="d-block w-100" alt="Responsive image">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url();?>assets/img/reynaa.jpg" class="d-block w-100" alt="Responsive image">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url();?>assets/img/kj.jpg" class="d-block w-100" alt="Responsive image">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev" >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </body>
</html>
