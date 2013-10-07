<?php

namespace FrontModule;

class ClankyKeStazeniPresenter extends BasePresenter
{	
	
	/** @persistent int  */
	public $lastCol = 1;	// last column
	
	
	public function actionDefault()
	{	
		// implicitly for all cols in template
		$this->template->sort = 'asc';
				
		// no SQL query if we call signal
		if (!isset($_GET['do']))
			$this->template->articles = $this->article->fetchAll();
	}

	
	/**
	 * @param int $column
	 * @param string $sort
	 */
	public function handleOrder($column, $sort)
	{	
		$sort = ($column != $this->lastCol) ? 'asc' : $sort;
		$this->template->articles = $this->article->fetchAllOrder($column, $sort);
		
		$this->lastCol = $column;
		$this->template->sort = ($sort == 'asc') ? 'desc' : 'asc'; 
	}
	
}