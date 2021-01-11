<!DOCTYPE html>
<html>

<head>
	<title>Varázstorony Blog</title>


	<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!--This script need for dropdown menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   


    
</head>


<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="navbar-brand"  href="<?php echo base_url(); ?>">Kezdőlap</a>
				</li>
				<li class="nav-item "><a class="nav-link"  href="<?php echo base_url(); ?>about">Rólunk</a></li>
				<li class="nav-item "><a class="nav-link"  href="<?php echo base_url(); ?>posts">Blog</a></li>
				<li class="nav-item "><a class="nav-link"  href="<?php echo base_url(); ?>categories">Kategóriák</a></li>
				
				

		<?php if($this->session->userdata('logged_in') ): ?>
				<li class="nav-item "><a class="nav-link"  href="<?php echo base_url(); ?>equipments/map">Térkép</a></li>

				 <li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="		button" aria-haspopup="true" aria-expanded="false">Eszközök</a>
        				<div class="dropdown-menu">
          			<a class="dropdown-item" href="<?php echo base_url(); ?>equipments/cartesius">Cartesius-búvár</a>
          			
          			<a class="dropdown-item" href="<?php echo base_url(); ?>equipments/robi">Robi a robot</a>

          			<a class="dropdown-item" href="<?php echo base_url(); ?>equipments/table">Terepasztal</a>

          			<a class="dropdown-item" href="<?php echo base_url(); ?>equipments/hell">Hell-harang</a>

          			<a class="dropdown-item" href="<?php echo base_url(); ?>equipments/laser">Lézer-show</a>

          			<a class="dropdown-item" href="<?php echo base_url(); ?>equipments/slope">Lejtő</a>
      		</li>

      <?php endif; ?>			
				
				<?php if($this->session->userdata('logged_in') && $this->session->userdata('admin') == 1): ?>
					
					<li class="nav-link"><?php echo anchor(base_url('users/list/'),'Users');?></li>
				<?php endif; ?>
			
				
			</ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="nav navbar-nav navbar-right">
				<?php if(!$this->session->userdata('logged_in')): ?>
				<li class="nav-item "><a class="nav-link"  href="<?php echo base_url(); ?>users/register">Regisztráció</a></li>


				<li class="nav-item "><a class="nav-link"  href="<?php echo base_url(); ?>users/login">Bejelentkezés</a></li>



			<?php endif; ?>
			<?php if($this->session->userdata('logged_in')): ?>
				<li class="nav-item "><a class="nav-link"  href="<?php echo base_url(); ?>posts/create">Post készítése</a></li>
				<li class="nav-item "><a class="nav-link"  href="<?php echo base_url(); ?>categories/create">Kategória készítése</a></li>
				<li class="nav-item "><a class="nav-link"  href="<?php echo base_url(); ?>users/logout">Kijelentkezés</a></li>

			<?php endif; ?>

				
			</ul>
    </form>
  </div>
</nav>

<div class="container">
	<?php if($this->session->flashdata('user_registered')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
	<?php endif; ?>

	<?php if($this->session->flashdata('post_created')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
	<?php endif; ?>

	<?php if($this->session->flashdata('post_updated')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
	<?php endif; ?>

	<?php if($this->session->flashdata('category_created')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
	<?php endif; ?>

	<?php if($this->session->flashdata('post_deleted')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
	<?php endif; ?>

	<?php if($this->session->flashdata('login_failed')): ?>
		<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
	<?php endif; ?>


	<?php if($this->session->flashdata('user_loggedin')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
	<?php endif; ?>

	


	<?php if($this->session->flashdata('user_loggedout')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
	<?php endif; ?>



<!--
	<?php  
 $connect = mysqli_connect("89.40.126.232:8080", "varazstorony", "VarazsTorony_18", "varazstorony");  
 $query ="SELECT * FROM posts ORDER BY id desc";  
 $result = mysqli_query($connect, $query); 
 ?> 

 --> 




























	
