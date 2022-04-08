<?php

namespace App\Controllers;

use App\Models\UsersModel;

//user controller
class Users extends BaseController
{
	//List all users
	public function index()
	{
		// We "grab" our model
		$model = model(UsersModel::class);

		$data = [
			'users'  => $model->getUsers(), 
			'username' => $username,    
			
		];

	}
	
	public function login()
	{
		$model = model(UsersModel::class);
		
		echo view('templates/header', ['title' => 'Log in']);
			echo view('users/login');
			echo view('templates/footer');
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
		$model->deleteAccount($Id);
		return redirect()->to('users/register');
	}
	
	public function register()
	{
		$model = model(UsersModel::class);

		if ($this->request->getMethod() === 'post' && $this->validate([
			'username' => 'required|alpha_numeric_space|min_length[5]',
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|valid_email|is_unique[users.email]',
			'password'  => 'required|min_length[8]',
		])) {
			$model->save([
				'username' => $this->request->getPost('username'),
				'first_name' => $this->request->getPost('first_name'),
				'last_name' => $this->request->getPost('last_name'),
				'email' => $this->request->getPost('email'),
				'password'  => $this->request->getPost('password'),
			]);

			echo view('templates/header', ['title' => 'Success']);
			echo view('users/success');
			echo view('templates/footer');
			
			
		} else {
			echo view('templates/header', ['title' => 'Sign Up']);
			echo view('users/register');
			echo view('templates/footer');
		}
	}
	
	
}