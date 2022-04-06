<?php

namespace App\Controllers;

use App\Models\NewsModel;

//News controller
class News extends BaseController
{
	//List all news item
	public function index()
	{
		// We "grab" our model
		$model = model(NewsModel::class);

		// We store the data in an object, to pass to the view
		$data = [
			'news'  => $model->getNews(), // we get our news item from model
			'title' => 'Welcome!',    // and a title for the page
		];

		// Loads views, passing our data object
		echo view('templates/header', $data);
		echo view('news/overview', $data);
		echo view('templates/footer', $data);
	}
	

    //List ONE new item, based on slug
    public function view($slug = null)
    {
			$model = model(NewsModel::class);

			$data['news'] = $model->getNews($slug);
			
		if (empty($data['news'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
		}

		$data['title'] = $data['news']['title'];

		echo view('templates/header', $data);
		echo view('news/view', $data);
		echo view('templates/footer', $data);
	}
	
	public function create()
	{
		$model = model(NewsModel::class);

		if ($this->request->getMethod() === 'post' && $this->validate([
			'title' => 'required|min_length[3]|max_length[255]',
			'body'  => 'required',
		])) {
			$model->save([
				'title' => $this->request->getPost('title'),
				'slug'  => url_title($this->request->getPost('title'), '-', true),
				'body'  => $this->request->getPost('body'),
			]);

			//echo view('news/success');
			return redirect()->to('news');
			
		} else {
			echo view('templates/header', ['title' => 'Create a news item']);
			echo view('news/create');
			echo view('templates/footer');
		}
	}
	
	public function delete($slug)
	{
		$model = model(NewsModel::class);
		
		$model->deleteNews($slug);
		return redirect()->to('news');
		
	}
	
	public function amend($slug)
	{
		$model = model(NewsModel::class);
		
		if ($this->request->getMethod() === 'post' && $this->validate([
			'title' => 'required|min_length[3]|max_length[255]',
			'body'  => 'required',
		])) {
			$model->update([
				'title' => $this->request->getPost('title'),
				'slug'  => url_title($this->request->getPost('title'), '-', true),
				'body'  => $this->request->getPost('body'),
			]);

			//echo view('news/success');
			return redirect()->to('news');
			
		} else {
			echo view('templates/header', ['title' => 'Create a news item']);
			echo view('news/create');
			echo view('templates/footer');
		}
	}
}