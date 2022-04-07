<!doctype html>
<html>
<head>
    <title>WebLog</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	
<style>
#myBtn {
    display: none; 
    position: fixed; 
    bottom: 20px; 
    right: 30px; 
    z-index: 99; 
    border: none; 
    outline: black;  
    color: white; 
    cursor: pointer; 
    padding: 10px; 
    border-radius: 80px; 
    font-size: 25px; 
}

</style>
<script>
      // When the user scrolls down 50px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
   
      function scrollFunction() {
         if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
           document.getElementById("myBtn").style.display = "block";
         } else {
           document.getElementById("myBtn").style.display = "none";
         }
         }
   
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
         document.body.scrollTop = 0; // For Safari
         document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
         }
 </script>	
</head>
<body class="bg-light text-black">
	<div class="container-fluid bg-light container-sm">
	<?php echo view("templates/navbar"); ?>
    <br/><h1><?= esc($title) ?></h1>
	<button class="btn btn-primary text-light" onclick="topFunction()" id="myBtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
  <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
</svg></button>