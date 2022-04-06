
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="<?=base_url()?>/news/create" method="post">
    <?= csrf_field() ?>
	
	<div class="mb-3">
		<label for="title" >Title</label>
		<input class="form-control" type="input" name="title" /><br />
    </div>
	<div class="mb-3">
		<label for="body" >Text</label>
		<textarea class="form-control" name="body" cols="45" rows="4"></textarea><br />
	</div>

    <input class="btn btn-primary" type="submit" name="submit" value="Create news item" />
</form>