<?php

namespace App\Controllers;

use App\Models\UsersModel;

//News controller
class Users extends BaseController
{
	//List all news item
	public function index()
	{
		// We "grab" our model
		$model = model(UsersModel::class);

	}
	
	public function login()
	{
		$model = model(UsersModel::class);
	}
	
	public function logout()
	{
		$model = model(UsersModel::class);
	}
	
	public function update()
	{
		$model = model(UsersModel::class);
	}
	
	public function delete()
	{
		$model = model(UsersModel::class);
	}
	
	public function register()
	{
		$model = model(UsersModel::class);

		if ($this->request->getMethod() === 'post' && $this->validate([
			'username' => 'required',
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required',
			'password'  => 'required',
		])) {
			$model->save([
				'username' => $this->request->getPost('username'),
				'first_name' => $this->request->getPost('first_name'),
				'last_name' => $this->request->getPost('last_name'),
				'email' => $this->request->getPost('email'),
				'password'  => $this->request->getPost('password'),
			]);

			//echo view('news/success');
			echo '<script>alert("Account Created!")</script>';
			return redirect()->to('users/register');
			
		} else {
			echo view('templates/header', ['title' => 'Sign Up']);
			echo view('users/register');
			echo view('templates/footer');
		}
	}
	
	
}