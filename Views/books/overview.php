

<a class="btn btn-outline-success text-black mb-4" href="<?=base_url()?>/books/create">Add Book</a> <br/>

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


<?php if (! empty($books) && is_array($books)): ?>

<div  class="alert alert-dark" id="ajaxArticle" role="alert" aria-live="assertive" aria-atomic="true"> </div>

<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-2">

		<?php foreach ($books as $books_item): ?>
		<div class="col" >
		<div class="card m-1 h-100 text-black ">
		  <div class="card-body bg-dark text-white" >
			<h5 class="card-title"><b><?= esc($books_item['title']) ?></b></h5>
			 <p class="card-text"><?= esc($books_item['author']) ?></p> 
			  <p class="card-text"><?= esc($books_item['published']) ?></p>
			</div>
			 <div class="card-footer">
			 <div class=" btn-fluid btn-group" role="group" aria-label="Basic example">
				<a href="<?=base_url()?>/books/delete/<?= esc($books_item['slug'], 'url') ?>" class="btn btn-danger text-white">Delete</a>
				<button class="btn btn-outline-dark" onclick="getData('<?= esc($books_item['slug'], 'url') ?>')"> Genre</button>
				<a href="<?=base_url()?>/books/amend/<?= esc($books_item['slug'], 'url') ?>" class="btn btn-outline-primary text-dark">Update</a>
				<a href="<?=base_url()?>/books/view/<?= esc($books_item['slug'], 'url') ?>" class="btn btn-outline-info text-black">View </a>
			</div>
			</div>
		 </div>
		</div>

    <?php endforeach ?>
</div>
			

<?php else: ?>

    <h3>No Books</h3>

    <p>Unable to find any Books for you.</p>

<?php endif ?>



<script>
	function getData(slug) {
		
		document.getElementById("ajaxArticle").innerHTML = "Please wait..."
		
		// Fetch data
		fetch('http://mi-linux.wlv.ac.uk/~1606628/ci4-demo/public/ajax/get/' + slug)
			
		  // Convert response string to json object
		  .then(response => response.json())
		  .then(response => {

			// Copy one element of response to our HTML paragraph
			document.getElementById("ajaxArticle").innerHTML = response.title + ": " + response.genre;
		  })
		  .catch(err => {
			
			// Display errors in console
			console.log(err);
		});
	}
</script>



