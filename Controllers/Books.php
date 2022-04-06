<?php

namespace App\Controllers;

use App\Models\BooksModel;

//News controller
class Books extends BaseController
{
	//List all news item
	public function index()
	{
		// We "grab" our model
		$model = model(BooksModel::class);

		// We store the data in an object, to pass to the view
		$data = [
			'books'  => $model->getBooks(), // we get our news item from model
			'title' => 'Welcome!',    // and a title for the page
		];

		// Loads views, passing our data object
		echo view('templates/header', $data);
		echo view('books/overview', $data);
		echo view('templates/footer', $data);
	}

    //List ONE new item, based on slug
    public function view($slug = null)
    {
			$model = model(BooksModel::class);

			$data['books'] = $model->getBooks($slug);
			
		if (empty($data['books'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $summary);
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

			//echo view('news/success');
			return redirect()->to('books');
			
		} else {
			echo view('templates/header', ['title' => 'Add a new Book']);
			echo view('books/create');
			echo view('templates/footer');
		}
	}
	
	public function delete($slug)
	{
		$model = model(BooksModel::class);
		
		$model->deleteBooks($slug);
		return redirect()->to('books');
		
	}
	
	public function amend($slug)
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

			//echo view('news/success');
			return redirect()->to('books');
			
		} else {
			echo view('templates/header', ['title' => 'Add a new Book']);
			echo view('books/create');
			echo view('templates/footer');
		}

	}
}