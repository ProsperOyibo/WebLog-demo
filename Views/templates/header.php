<!doctype html>
<html>
<head>
    <title>WebLog</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
	<button class="btn btn-warning text-light" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>