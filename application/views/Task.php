<!DOCTYPE html>
<html>
<head>
    <title>Table Task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <style>
      body{
        background: url('<?php echo base_url();?>assets/vector-bg.png'); 
        background-size:100%; 
        background-repeat: no-repeat; 
        width: 100%; 
      }
      </style>
</head>
<body>
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
              <a class="nav-link link-navbar tebel-sedang" href="<?= site_url('auth/showhome') ?>">HOME &nbsp;&nbsp;</a>
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
              <a href="<?php echo base_url(); ?>index.php/auth/logout" class="nav-link bg-custom rounded tebel-sedang shadow" id="btn-sign">Logout</a>
          </ul>
        </div>
            
            </li>
          </ul>
        </div>
      </div>
      
    </nav>

    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <center>
    
        <a href="<?= site_url('COBAAAA/Crud/tambah') ?>" class="btn btn-primary">Post a New Task</a>
        <br></br>

    </center>
    <table style="margin:20px auto;" border="1" class="table table-striped table-dark">
          <tr>
              <th>No</th>
              <th>Nama Task</th>
              <th>Nama Pelajaran</th>
              <th>Deskripsi</th>
              <th>Kisar Harga</th>
              <th>Action</th>
          </tr>
          <?php 
          $no = 1;
          foreach($task as $data){ 
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->NamaTask ?></td>
              <td><?php echo $data->NamaPelajaran ?></td>
              <td><?php echo $data->Deskripsi ?></td>
              <td><?php echo $data->KisarHarga ?></td>
              <td>
                  <?php echo anchor('COBAAAA/Crud/edit/'.$data->Id_Task,'Edit'); ?>
                            <?php echo anchor('COBAAAA/Crud/hapus/'.$data->Id_Task,'Hapus'); ?>
              </td>
          </tr>
          <?php } ?>
      </table>
      <center>
        <a href="<?= site_url('auth/showhome') ?>" class="btn btn-primary">Back</a>
      </center>
</body>
