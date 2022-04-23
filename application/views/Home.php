<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
    <link rel="stylesheet" href="assets/css/body.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Home</title>
  </head>
  <style>
      body{
        background: url('<?php echo base_url();?>assets/vector-bg.png'); 
        background-size:100%; 
        background-repeat: no-repeat; 
        width: 100%; 
      }
      </style>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?php echo base_url('assets/logo.png'); ?>" height="150px"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expended="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link link-navbar tebel-sedang" href="#">HOME &nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-navbar tebel-sedang" href="<?= site_url('auth/showabout') ?>">ABOUT &nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-navbar tebel-sedang" href="<?= site_url('COBAAAA/Crud/index') ?>">TASK &nbsp;&nbsp;</a>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
          <ul class="nav nav-pills">
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>auth/showprofilee" class="nav-link bg-custom rounded tebel-sedang shadow" id="btn-sign">Profile</a>
          </ul>
        </div>
             <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
          <ul class="nav nav-pills">
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>index.php/auth/logout" class="nav-link bg-custom rounded tebel-sedang shadow" id="btn-sign">Logout</a>
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
    

        </div>

      </div>
    </div>
    <div class ="container">
      <table id="example"  class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Cypher</td>
      <td>Male</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Kiljjoy</td>
      <td>Female</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Diluc pyrowanto</td>
      <td>Male</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Dodi saputri</td>
      <td>Female</td>
      <td>3</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Reyna hernawati</td>
      <td>Female</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Abdurahman Breach</td>
      <td>Male</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>ZeroTu</td>
      <td>Female</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Sayu</td>
      <td>Male</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Muhammad tetuko Omen</td>
      <td>Male</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Keqing hanurogo</td>
      <td>male</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Sova</td>
      <td>Male</td>
      <td>5</td>
    </tr>
  </tbody>
</table>
    
    




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="js/onscroll.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript"> 
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

  </body>
</html>