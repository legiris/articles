<?php

class Article extends BaseManager
{
	/**
	 * @param array $data
	 */
	public function insert($data)
	{
		$this->dibi->query('
			INSERT INTO
				[article]', $data);
	}
	
	
	/**
	 * all articles for html presentation
	 * @return array of DibiRow
	 */
	public function fetchAll()
	{
		return $this->dibi->fetchAll("
			SELECT
				[article.id], [article.title], [article.abstract], [article.file], SUBSTRING_INDEX(article.file, '.', -1) AS suffix,
				[article.author], [category.name], CONCAT_WS(' ',journal.title, CONCAT_WS('/',journal.year,journal.volume)) AS journal 
			FROM
				[article]
			LEFT JOIN
				[category] ON [article.category_id] = [category.id]
			LEFT JOIN
				[journal] ON [article.journal_id] = [journal.id]
			ORDER BY
				[article.title]		
		");
	}
	
	
	/**
	 *  select and order articles
         * @param string $column
         * @param string $sort
         * @return array of DibiRow
	 */
	public function fetchAllOrder($column, $sort)
	{
		return $this->dibi->fetchAll("
			SELECT
				[article.id], [article.title], [article.abstract], [article.file], SUBSTRING_INDEX(article.file, '.', -1) AS suffix,
				[article.author], [category.name], CONCAT_WS(' ',journal.title, CONCAT_WS('/',journal.year,journal.volume)) AS journal
			FROM
				[article]
			LEFT JOIN
				[category] ON [article.category_id] = [category.id]
			LEFT JOIN
				[journal] ON [article.journal_id] = [journal.id]
			ORDER BY
				$column $sort
				");
	}
	
	
	
	/**
	 * articles by year and volume
	 * @param int $year
	 * @param int $volume
	 * @return array of DibiRow
	 */
	public function fetchAllByDate($year, $volume)
	{
		return $this->dibi->fetchAll('
			SELECT
				article.id, article.title, article.abstract, article.file, article.author, category.name, category.names
			FROM
				article
			LEFT JOIN
				category ON article.category_id = category.id
			LEFT JOIN
				journal ON article.journal_id = journal.id
			WHERE
				journal.year = %i AND journal.volume = %i
			ORDER BY 
				category.order, article.author		
			', $year, $volume);
	}

	
	/**
	 * select all articles by year
	 * @param int $year
	 * @return array of DibiRow
	 */
	public function fetchAllByYear($year)
	{
		return $this->dibi->fetchAll("
			SELECT
				article.id, article.title AS articleTitle, article.author, category.name,
				journal.title AS journalTitle, journal.volume, journal.year
			FROM
				article
			LEFT JOIN
				journal ON article.journal_id = journal.id 		
			LEFT JOIN
				category ON article.category_id = category.id	
			WHERE
				year = %i	
			ORDER BY
				journalTitle DESC, journal.volume DESC, journal.year DESC, article.title	
			", $year);
		
	}
	

	/**
	 * select articles by the latest issue of journal
	 * @return array of DibiRow
	 */
	public function findLatest()
	{
		return $this->dibi->fetchAll('
			SELECT
				article.id, article.title, article.abstract, article.file, article.author, category.name, category.names
			FROM
				article
			LEFT JOIN
				category ON article.category_id = category.id
			WHERE	
				journal_id = (SELECT id FROM journal ORDER BY year DESC, volume DESC LIMIT 1)		
			ORDER BY
				category.order, article.author	
			');
	}
		
}