<h2><?= esc($title) ?></h2>

<a class="btn btn-primary mb-4" href="<?=base_url()?>/news/create">Create article</a>

<?php if (! empty($news) && is_array($news)): ?>

<div class="row row-cols-1 row-cols-md-4 g-4">

		<?php foreach ($news as $news_item): ?>
		<div class="col">
		<div class="card mb-2 h-100 text-black bg-light">
		  <div class="card-body">
			<h5 class="card-title"><?= esc($news_item['title']) ?></h5>
			<p class="card-text"><?= esc($news_item['body']) ?></p>
			<a href="<?=base_url()?>/news/view/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-primary">View article</a>
		  </div>
		</div>
		</div>
        

    <?php endforeach ?>
</div>
	

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>