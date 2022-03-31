
<a class="btn btn-outline-warning text-black mb-4" href="<?=base_url()?>/news/create">Create article</a> <br/>

<div id="carouselExampleInterval" class="carousel slide h-20" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="<?=base_url('images/book-shelf.jpg')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="<?=base_url('images/book-shelf.jpg')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('images/book-shelf.jpg')?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> <br/>


<?php if (! empty($news) && is_array($news)): ?>

<div class="row row-cols-1 row-cols-md-4 g-4">

		<?php foreach ($news as $news_item): ?>
		<div class="col">
		<div class="card mb-2 h-100 text-black bg-white">
		  <div class="card-body">
			<h5 class="card-title"><?= esc($news_item['title']) ?></h5>
			<p class="card-text"><?= esc($news_item['body']) ?></p>
			<a href="<?=base_url()?>/news/view/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-outline-warning text-black">View article</a>
		  </div>
		</div>
		</div>
        

    <?php endforeach ?>
</div>
	

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>