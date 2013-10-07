<?php

class Journal extends BaseManager
{
	/**
	 * insert data 
	 * @param array $data
	 */
	public function insert($data)
	{
		$this->dibi->query('
			INSERT INTO
				[journal]', $data);
	}
	
	
	/**
	 * select options for html form 
	 * @return DibiRow
	 */
	public function fetchOptions()
	{
		$result = $this->dibi->query("
			SELECT 
				id, CONCAT_WS(' ',title, CONCAT_WS('/',year,volume)) AS journal
			FROM 
				journal
			ORDER BY
				year DESC, volume DESC
		");
		
		return $result->fetchPairs($key='id', $value='journal');
	}
	
	
	/**
	 * select years when journals were published eg. for archive bar
	 * @return array of DibiRow
	 */
	public function fetchYears()
	{
		return $this->dibi->fetchAll('
			SELECT
				year
			FROM
				journal
			GROUP BY
				year
			ORDER BY
				year		
		');
			
	}
		
	
	/**
	 * select the latest issue of journal without formatting
	 * @return array of DibiRow
	 */
	public function findLatestTitle()
	{
		return $this->dibi->fetchAll("
			SELECT 	
				title, volume, year
			FROM
				journal
			ORDER BY
				year DESC, volume DESC
			LIMIT 1	
			");
	}
	
	
	/**
	 * select journal by year and volume (CasopisPresenter)
	 * @param int $year
	 * @param int $volume
	 * @return DibiRow
	 */
	public function loadByDate($year, $volume)
	{
		$result = $this->dibi->fetch('
			SELECT
				id, title, volume, year
			FROM
				journal	
			WHERE
				year = %i AND volume = %i
			', $year, $volume);
		
		return $result;
	}
	
	
	/**
	 * select journal titles by year, used in archive
	 * @param int $year
	 * @return array of DibiRow
	 */
	public function fetchTitlesByYear($year)
	{
		return $this->dibi->fetchAll("
			SELECT
				id, title, volume, year 
			FROM
				journal	
			WHERE
				year = %i
			ORDER BY
				year DESC, volume DESC	
		", $year);	
	}
	
	
	/**
	 * select left side menu -- the latest issues by count
	 * @param int $count
	 * @return array of DibiRow
	 */
	public function fetchAllByCount($count)
	{
		return $this->dibi->fetchAll("
			SELECT
				id, CONCAT_WS(' ', title, CONCAT_WS('/', year, volume)) AS journal, year, volume
			FROM
				journal
			ORDER BY
				year DESC, volume DESC
			LIMIT 0, %i
			", $count);
	}
	
}