<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
	protected $allowedFields = ['username', 'first_name', 'last_name', 'email', 'password'];
	
	// This returns news items from database
		public function getNews($slug = false)
		
	{
		// If no slug (Id) from new db is provided then select all
		if ($slug === false) {
			return $this->findAll();
		}
		
        // if slug (Id) is provided then select that one
		return $this->where(['slug' => $slug])->first();
	}
	
	public function deleteNews($slug)
	{
		$db = \Config\Database::connect();
		$builder = $db->table('news');
		$builder->delete(['slug' => $slug]);
		
	}
}