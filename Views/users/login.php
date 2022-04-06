<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<?php if (!isset($_POST['submit'])) { ?>
<div class="card text-black bg-outline-dark m-4 h-100" >
<div class="card-body">
  <form action="<?=base_url()?>/users/login" class="form-container">
	 <?= csrf_field() ?>
   <br /><div class="mb-3">
		<label for="username" >Username</label>
		<input class="form-control" placeholder="Username" type="text" name="username" required /><br />
    </div>

   <div class="mb-3">
		<label for="password" >Password</label>
		<input class="form-control" placeholder="Password" type="password" name="password" required /><br />
	</div>
	
    </div>
     <div class="card-footer">
    <input class="btn btn-outline-primary" type="submit"  name="submit" value="Log in" />
	</div>
  </form>
</div>

<?php } else {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
}
		

?>