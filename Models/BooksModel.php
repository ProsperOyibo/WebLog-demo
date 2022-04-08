<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    protected $table = 'books';
	protected $allowedFields = ['title', 'author', 'published', 'genre', 'slug', 'description'];
	
	// This returns book items from database
		public function getBooks($bookId = false)
		
	{
		// If no  (Id) from new db is provided then select all
		if ($bookId === false) {
			return $this->findAll();
		}
		
        // if  (Id) is provided then select that one
		return $this->where(['bookId' => $bookId])->first();
	}
	
	public function deleteBooks($bookId)
	{
		$db = \Config\Database::connect();
		$builder = $db->table('books');
		$builder->delete(['bookId' => $bookId]);
		
	}
	
	 
}