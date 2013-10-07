<?php

class Category extends BaseManager
{
	
	/**
	 * @param array $data
	 */
	public function insert($data)
	{	
		$this->dibi->query('
			INSERT INTO
				category', $data);
	}

	/**
	 * select all options
	 */
	public function fetchOptions()
	{	
		// return DibiResult
		$result = $this->dibi->query('
			SELECT
				id, name
			FROM
				category');
		
		return $result->fetchPairs($key='id', $value='name');
	}
	
}