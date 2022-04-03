
<a class="btn btn-outline-warning text-black mb-4" href="<?=base_url()?>/news/create">Create article</a> <br/>

<div  id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel" class="carousel fluid" >
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="<?=base_url('images/photo-slide-1.png')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="<?=base_url('images/photo-slide-2.png')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="<?=base_url('images/photo-slide-3.png')?>" class="d-block w-100" alt="...">
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

<p id="ajaxArticle"></p> 


<?php if (! empty($news) && is_array($news)): ?>

<div class="row row-cols-1 row-cols-md-5 g-1">

		<?php foreach ($news as $news_item): ?>
		<div class="col">
		<div class="card mb-2 h-100 text-black bg-white">
		  <div class="card-body">
			<h5 class="card-title"><?= esc($news_item['title']) ?></h5>
			 <p class="card-text"><?= esc($news_item['body']) ?></p> 
			<a href="<?=base_url()?>/news/view/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-outline-info text-black">View Article</a>
			<p><button class="btn btn-outline-warning text-black" onclick="getData('<?= esc($news_item['slug'], 'url') ?>')">View article via Ajax</button></p>
			<a href="<?=base_url()?>/news/delete/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-danger text-white">Delete</a>
		  </div>
		</div>
		</div>
        

    <?php endforeach ?>
</div>
	

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>

<script>
	function getData(slug) {
		
		// Fetch data
		fetch('https://mi-linux.wlv.ac.uk/~1606628/ci4-demo/public/ajax/get/' + slug)
			
		  // Convert response string to json object
		  .then(response => response.json())
		  .then(response => {

			// Copy one element of response to our HTML paragraph
			document.getElementById("ajaxArticle").innerHTML = response.title + ": " + response.text;
		  })
		  .catch(err => {
			
			// Display errors in console
			console.log(err);
		});
	}
</script>