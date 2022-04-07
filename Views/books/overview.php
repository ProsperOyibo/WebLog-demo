

<a class="btn btn-outline-white text-black mb-4" href="<?=base_url()?>/books/create"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg></a> <br/>

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

<?php if($message == 1) : ?>
	<div  class="alert alert-dark" id="ajaxArticle" role="alert" aria-live="assertive" aria-atomic="true">Book Added!</div>
<?php elseif($message == 2):?>
	<div  class="alert alert-dark" id="ajaxArticle" role="alert" aria-live="assertive" aria-atomic="true">Book deleted successfully!</div>
<?php endif ?>
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
				<a href="<?=base_url()?>/books/delete/<?= esc($books_item['slug'], 'url') ?>" class="btn btn-danger text-white"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
				<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
				</svg> Delete</a>
				<button class="btn btn-outline-secondary text-dark" onclick="getData('<?= esc($books_item['slug'], 'url') ?>')"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-valentine2" viewBox="0 0 16 16">
				<path d="M8 6.493c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132ZM4.25 3a.25.25 0 0 0-.25.25v1.5a.25.25 0 0 0 .5 0V3.5h1.25a.25.25 0 0 0 0-.5h-1.5Zm6 0a.25.25 0 1 0 0 .5h1.25v1.25a.25.25 0 1 0 .5 0v-1.5a.25.25 0 0 0-.25-.25h-1.5ZM4.5 12.25a.25.25 0 1 0-.5 0v1.5c0 .138.112.25.25.25h1.5a.25.25 0 0 0 0-.5H4.5v-1.25Zm7.5 0a.25.25 0 1 0-.5 0v1.25h-1.25a.25.25 0 1 0 0 .5h1.5a.25.25 0 0 0 .25-.25v-1.5Z"/>
				<path fill-rule="evenodd" d="M2 1.994v-.042a1 1 0 0 1 .9-.995l9-.9A1 1 0 0 1 13 1a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1.994ZM3 2v13h10V2H3Z"/>
				</svg> Genre</button>
				<a href="<?=base_url()?>/books/amend/<?= esc($books_item['slug'], 'url') ?>" class="btn btn-outline-warning text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-hypnotize" viewBox="0 0 16 16">
				<path d="m7.949 7.998.006-.003.003.009-.01-.006Zm.025-.028v-.03l.018.01-.018.02Zm0 .015.04-.022.01.006v.04l-.029.016-.021-.012v-.028Zm.049.057v-.014l-.008.01.008.004Zm-.05-.008h.006l-.006.004v-.004Z"/>
				<path fill-rule="evenodd" d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM4.965 1.69a6.972 6.972 0 0 1 3.861-.642c.722.767 1.177 1.887 1.177 3.135 0 1.656-.802 3.088-1.965 3.766 1.263.24 2.655-.815 3.406-2.742.38-.975.537-2.023.492-2.996a7.027 7.027 0 0 1 2.488 3.003c-.303 1.01-1.046 1.966-2.128 2.59-1.44.832-3.09.85-4.26.173l.008.021.012-.006-.01.01c.42 1.218 2.032 1.9 4.08 1.586a7.415 7.415 0 0 0 2.856-1.081 6.963 6.963 0 0 1-1.358 3.662c-1.03.248-2.235.084-3.322-.544-1.433-.827-2.272-2.236-2.279-3.58l-.012-.003c-.845.972-.63 2.71.666 4.327a7.415 7.415 0 0 0 2.37 1.935 6.972 6.972 0 0 1-3.86.65c-.727-.767-1.186-1.892-1.186-3.146 0-1.658.804-3.091 1.969-3.768l-.002-.007c-1.266-.25-2.666.805-3.42 2.74a7.415 7.415 0 0 0-.49 3.012 7.026 7.026 0 0 1-2.49-3.018C1.87 9.757 2.613 8.8 3.696 8.174c1.438-.83 3.084-.85 4.253-.176l.005-.006C7.538 6.77 5.924 6.085 3.872 6.4c-1.04.16-2.03.55-2.853 1.08a6.962 6.962 0 0 1 1.372-3.667l-.002.003c1.025-.243 2.224-.078 3.306.547 1.43.826 2.269 2.23 2.28 3.573L8 7.941c.837-.974.62-2.706-.673-4.319a7.415 7.415 0 0 0-2.362-1.931Z"/>
				</svg> Update</a>
				<a href="<?=base_url()?>/books/view/<?= esc($books_item['slug'], 'url') ?>" class="btn btn-outline-primary text-black"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
				<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
				<path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
				</svg> View </a>
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



