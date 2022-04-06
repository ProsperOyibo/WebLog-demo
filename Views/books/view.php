<div class="container-fluid bg-dark text-dark" >
<div class="card">
  <div class="card-body">
<p><?= esc($books['description']) ?></p>
 </div>
</div>



</div> </br>
<div class="btn-group" role="group" aria-label="Basic example">
		<a href="<?=base_url()?>/books/delete/<?= esc($books['slug'], 'url') ?>" class="btn btn-danger text-white">Delete</a>
</div><br/>
