<?php echo form_open('users/login'); ?>

	<div class="container" style="width: 50%">
	
		<div class="vertical-align" >
			<h1 class="text-center">Bejelentkezés</h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="felhasználónév" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="jelszó" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Bejelentkezés</button>
	
		</div>

	</div>
<?php echo form_close(); ?>