<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html><head>
   <meta charset="UTF-8">
   <title> Account Registration | NavIPB </title>

   <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>">

	<script src="<?php echo base_url('assets/jquery/jquery-3.3.1.min.js') ;?>"></script>
	
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ;?>"></script>
	
	<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ;?>"></script>
	
	<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js') ;?>"></script>
 </head>

 	<h1> NavIPB </h1>  
 	<div class="body">

 	<h2> Sign Up </h2>
 <body>

	<?php echo form_open('register');?>
	<p>Name :</p>
	<input type="text" name="name" value="<?php echo set_value('name'); ?>" placeholder="Enter Your Name"/>
	<?php echo form_error('name'); ?> </p>
	<p>Username :</p>
	<input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Enter Your Username"/> 
	<?php echo form_error('username'); ?> </p>
	<p>Email :</p>
	<input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter Your Email"/>
	<?php echo form_error('email'); ?> </p>
 	<p>Password :</p>
	<input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Enter Your Password"/>
	<?php echo form_error('password'); ?> </p>
	<p>Confirm Password  :</p>
	<input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" placeholder="Enter Your Password"/>
	<?php echo form_error('password_conf'); ?>
	<p>
	<input type="submit" name="btnSubmit" value="Submit as Mahasiswa" class="btn btn-success btn-lg btn-block"/>
	<?php echo form_close();?>
 	</p>
    <p>
	<input type="submit" name="btnSubmit" value="Submit as Dosen" class="btn btn-success btn-lg btn-block"/>
	<?php echo form_close();?>
 	</p>
    
	<h3>
	Back to Homepage? Please click <?php echo anchor(site_url().'/beranda','here'); ?>
	</h3>
</body>

   
 <style>
	html {
		margin: 0;
		padding: 0;
		width: 100%;
		position: absolute;
		background-image: url('https://images.wallpaperscraft.com/image/globe_map_ball_109861_1280x720.jpg');
		background-size: cover;
	}

  	h1 {
  		position: absolute;
  		font-family: georgia;
  		font-size: 50px;
  		left: 3%;
  		top: 3px;
  		color: #FAEBD7 ;
  		border: 5px solid #FAEBD7 ;
  		background:rgba(0,0,0,0.2);
      border-radius: 10px;
  	}

    .body { 
       	width: 420px; 
        height: 780px;
        background: black; 
        padding: 25px 35px; 
        position: fixed; 
        left: 83%;  
        top: 50%; 
        transform: translate(-50%, -50%);
        border-style:solid;
        border-color: white;
		    border-width: 3px;
        border-width: 3px;
        background:rgba(0,0,0,0.8);
        border-radius: 20px;
        }

    .body h2 {
     	text-align: center; 
     	color: #fff; 
     	font-size: 35px;
     	font-family: impact;
     	font-weight: normal; 
     	margin-bottom: 30px;
     	margin-top: 0px;
     }
        
    .body input {
    	width: 100%; 
    	background: none; 
    	border: 1px solid #fff; 
    	border-radius: 3px; 
    	padding: 6px 15px; 
    	box-sizing: border-box; 
    	margin-bottom: 20px; 
    	font-size: 16px; 
    	color: #fff;
    }
        
    input[type="submit"] { 
    	background:  #800000; 
    }
   	
   	p {
   		color:white;
   		font-size: 15px;
      font-family: courier;
   	}

   	h3 {
    	font-family: georgia;
    	font-size: 16px;
    	color: white;
    	margin-top: 8%;
    }

    h4 {
    	font-family: courier;
    }

</style>
 </html>