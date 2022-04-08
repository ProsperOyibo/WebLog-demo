<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
	protected $allowedFields = ['username', 'first_name', 'last_name', 'email', 'password'];
	
	// This returns users from database
		public function getUsers($id = false)
		
	{
		// If no (Id) from new db is provided then select all
		if ($id === false) {
			return $this->findAll();
		}
		
        // if  (Id) is provided then select that one
		return $this->where(['id' => $id])->first();
	}
	
	public function deleteAccount($id)
	{
		$db = \Config\Database::connect();
		$builder = $db->table('users');
		$builder->delete(['id' => $id]);
		
	}
	
}