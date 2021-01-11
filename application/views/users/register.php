

<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="container" style="width: 50%">
	<div  >
		<div   style="text-align:center;">
			<h1 class="text-center">Regisztrálás</h1>
	<div class="form-group">
		<label>Teljes név</label>
		<input type="text" class="form-control" name="zipcode" placeholder="Teljes név">
	</div>
	<div class="form-group">
		<label>Irányítószám</label>
		<input type="text" class="form-control" name="name" placeholder="Irányítószám">
	</div><div class="form-group">
		<label>Email cím</label>
		<input type="email" class="form-control" name="email" placeholder="Email">
	</div><div class="form-group">
		<label>Felhasználó név</label>
		<input type="text" class="form-control" name="username" placeholder="Felhasználónév">
	</div><div class="form-group">
		<label>Jelszó</label>
		<input type="password" class="form-control" name="password" placeholder="Jelszó">
	</div>
	<div class="form-group">
		<label>Jelszó mégegyszer</label>
		<input type="password" class="form-control" name="password2" placeholder="Jelszó mégegyszer">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Regisztrálás</button>
	</div>
	</div>
</div>
<?php echo form_close(); ?>