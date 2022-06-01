<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
        background: url('<?php echo base_url();?>assets/img/BG.png'); 
        background-size:100%; 
        background-repeat: no-repeat; 
        width: 100%; 
      }
      </style>
    <title>Tambah</title>
  </head>

  <body>
    <br>
    <br>
    <center>
		<h1>Tambah Task Baru</h1>
	</center>
    <br>
    <form action="<?php echo base_url(). 'COBAAAA/Crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Task</td>
				<td><input type="text"  name="NamaTask"></td>
			</tr>
			<tr>
				<td>Nama Pelajaran</td>
				<td><input type="text"  name="NamaPelajaran"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text"  name="Deskripsi"></td>
			</tr>
      <tr>
				<td>Kisar Harga</td>
				<td><input type="text"  name="KisarHarga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"  value="Tambah"></td>
			</tr>
		</table>
	</form>	
<center>
  <a href="<?= site_url('COBAAAA/Crud/index') ?>" class="btn btn-primary">Back</a>
</center>

        
