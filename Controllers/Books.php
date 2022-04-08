<?php

namespace App\Controllers;

use App\Models\BooksModel;

//Books controller
class Books extends BaseController
{
	//List all books item
	public function index($message = '')
	{
		// We "grab" our model
		$model = model(BooksModel::class);

		// We store the data in an object, to pass to the view
		$data = [
			'books'  => $model->getBooks(), // we get our news item from model
			'title' => 'Welcome!',    // and a title for the page
			'message' => $message
		];

		// Loads views, passing our data object
		echo view('templates/header', $data);
		echo view('books/overview', $data);
		echo view('templates/footer', $data);
	}

    //List ONE book item, based on Id
    public function view($bookId = null)
    {
			$model = model(BooksModel::class);

			$data['books'] = $model->getBooks($bookId);
			
		if (empty($data['books'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $bookId);
		}

		$data['title'] = $data['books']['title'];

		echo view('templates/header', $data);
		echo view('books/view', $data);
		echo view('templates/footer', $data);
	}
	
	public function create()
	{
		$model = model(BooksModel::class);

		if ($this->request->getMethod() === 'post' && $this->validate([
			'title' => 'required',
			'author' => 'required',
			'published' => 'required',
			'genre' => 'required',
			'description'  => 'required',
		])) {
			$model->save([
				'title' => $this->request->getPost('title'),
				'author' => $this->request->getPost('author'),
				'published' => $this->request->getPost('published'),
				'slug'  => url_title($this->request->getPost('title'), '-', true),
				'genre' => $this->request->getPost('genre'),
				'description'  => $this->request->getPost('description'),
			]);
				
			return redirect()->to('books/index/1');
			
		} else {
			echo view('templates/header', ['title' => 'Add a new Book']);
			echo view('books/create');
			echo view('templates/footer');
		}
	}
	
	public function delete($bookId)
	{
		$model = model(BooksModel::class);
		
		$model->deleteBooks($bookId);
		return redirect()->to('books/index/2');
		
	}
	
	public function amend()
	{
			
		$model = model(BooksModel::class);
		
		if ($this->request->getMethod() === 'post' && $this->validate([
			'title' => 'required',
			'author' => 'required',
			'published' => 'required',
			'genre' => 'required',
			'description'  => 'required',
		])) {
			 $model->save([
				'title' => $this->request->getPost('title'),
				'author' => $this->request->getPost('author'),
				'published' => $this->request->getPost('published'),
				'slug'  => url_title($this->request->getPost('title'), '-', true),
				'genre' => $this->request->getPost('genre'),
				'description'  => $this->request->getPost('description'),
			]);
			
			
		    return redirect()->to('books/index/3');	
		
		}else {
				echo view('templates/header', ['title' => 'Update Book']);
				echo view('books/update');
				echo view('templates/footer');
		}
	}
}