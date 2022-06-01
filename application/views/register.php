<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Sign Up </title>
	</head>
	<style type="text/css">
            body{
                background: url('<?php echo base_url();?>assets/img/Login_md.png'); 
                background-size:100%; 
                background-repeat: no-repeat; 
                width: 100%; 
            }
        </style>
	<body>
	<form action="<?= site_url('auth/register') ?>" method="POST">
			<h2 style="color:white";>Sign Up</h2>

			<?php if(isset($_SESSION['success'])){ ?>
    <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
<?php
} ?>
<?php echo validation_errors('<div class="alert alert-danger">','</div>') ?>

            <!-- form 1 email  -->
        <div class="form-group" style="text-align:left;">
            <label for="email" style="color: white;">Email:</label>
            <input class="form-control" name="email" id="email" type="text">
        </div>
        <!-- form 2 username -->
        <div class="form-group" style="text-align:left;">
            <label for="username" style="color: white;">Username:</label>
            <input class="form-control" name="username" id="username" type="text">
        </div>
        <!-- form 3 password -->
        <div class="form-group" style="text-align:left;">
            <label for="password" style="color: white;">Password:</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>
        <!-- form 4 re-password -->
        <div class="form-group" style="text-align:left;">
            <label for="password" style="color: white;">Re-Enter Password:</label>
            <input class="form-control" name="password2" id="password" type="password">
        </div>

		<!-- button register -->
        <div>
            <button class="btn btn-primary" name="register">Register</button>
        </div>

			<p style="color:white";>Already have an account? Login <a href="<?= site_url('auth/showlogin') ?>">here</a></p>
		</form>
		<script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
		
	</body>
</html>