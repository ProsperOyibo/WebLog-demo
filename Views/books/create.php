
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="<?=base_url()?>/books/create" method="post">
    <?= csrf_field() ?>
	
	<div class="mb-3">
		<label for="title" >Title:</label>
		<input class="form-control" type="input" name="title" required /><br />
    </div>
	<div class="mb-3">
		<label for="author" >Authour:</label>
		<input class="form-control" type="input" name="author" required /><br />
    </div>
	<div class="mb-3">
		<label for="published" >Year Published:</label>
		<input class="form-control" type="input" name="published" required /><br />
    </div>
	<div class="mb-3">
		<label for="genre" >Genre:</label>
		<input class="form-control" type="input" name="genre" required /><br />
	</div> 
	<div class="mb-3">
		<label for="description" >Description:</label>
		<textarea class="form-control" name="description" cols="45" rows="4" required ></textarea><br />
	</div>

    <input class="btn btn-primary" type="submit" name="submit" value="Create new Book" />
</form>