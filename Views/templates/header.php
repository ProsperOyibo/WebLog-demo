<!doctype html>
<html>
<head>
    <title>WebLog</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
</head>
<body class="bg-light text-black">
	<div class="container-fluid bg-light container-sm">
	<?php echo view("templates/navbar"); ?>
    <br/><h1><?= esc($title) ?></h1>
	