<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    protected $table = 'books';
	protected $allowedFields = ['title', 'author', 'published', 'slug', 'genre','description'];
	
	// This returns news items from database
		public function getBooks($slug = false)
		
	{
		// If no slug (Id) from new db is provided then select all
		if ($slug === false) {
			return $this->findAll();
		}
		
        // if slug (Id) is provided then select that one
		return $this->where(['slug' => $slug])->first();
	}
	
	public function deleteBooks($slug)
	{
		$db = \Config\Database::connect();
		$builder = $db->table('books');
		$builder->delete(['slug' => $slug]);
		
	}
	
}