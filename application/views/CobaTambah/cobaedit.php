<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
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
	<center>
		<h1>Edit Data</h1>  
	</center>
	<?php foreach($task as $data){ ?>
	<form action="<?php echo base_url(). 'COBAAAA/Crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Task</td>
				<td>
					<input type="hidden" name="Id_Task" value="<?php echo $data->Id_Task ?>">
					<input type="text" name="NamaTask" value="<?php echo $data->NamaTask ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Pelajaran</td>
				<td><input type="text" name="NamaPelajaran" value="<?php echo $data->NamaPelajaran ?>"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="Deskripsi" value="<?php echo $data->Deskripsi ?>"></td>
			</tr>
            <tr>
				<td>Kisar Harga</td>
				<td><input type="text" name="KisarHarga" value="<?php echo $data->KisarHarga ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" ></td>
			</tr>
		</table>
	</form>	
    <center>
        <a href="<?= site_url('COBAAAA/Crud/index') ?>" class="btn btn-primary">Back</a>
    </center>
	<?php } ?>
</body>
</html>