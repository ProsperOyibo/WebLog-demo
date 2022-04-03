
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<?php if (!isset($_POST['submit'])) { ?>
<div class="card text-black bg-outline-dark m-4 h-100" >
<div class="card-body">
<form action="<?=base_url()?>/users/register" method="post">
    <?= csrf_field() ?>
	
	<br /><div class="mb-3">
		<label for="username" >Username</label>
		<input class="form-control" placeholder="Username" type="text" name="username" /><br />
    </div>
	<div class="mb-3">
		<label for="first_name" >First Name</label>
		<input class="form-control" placeholder="Enter your First name" type="text" name="first_name"  /><br />
	</div>
	<div class="mb-3">
		<label for="last_name" >Last Name</label>
		<input class="form-control" placeholder="Enter your Last name" type="text" name="last_name"  /><br />
	</div>
	<div class="mb-3">
		<label for="password" >Password</label>
		<input class="form-control" placeholder="Password" type="password" name="password"  /><br />
	</div>
	<div class="mb-3">
		<label for="email" >E-mail</label>
		<input class="form-control" type="text" placeholder="Email address" name="email"  /><br />
	</div>
     <div class="card-footer">
    <input class="btn btn-outline-primary" type="submit"  name="submit" value="Sign up" />
	</div>
</form>
</div>
</div>
<?php }
 ?>
	
	
