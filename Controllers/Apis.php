<?php

namespace App\Controllers;

use App\Models\BooksModel;

class Apis extends BaseController
{
	
	public function googleMaps()
	{
		
		$data['title'] = "Find store";

		echo view('templates/header', $data);
		echo view('apis/google', $data);
		echo view('templates/footer', $data);		
	}
}