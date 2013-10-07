<?php

namespace FrontModule;

class ArchivPresenter extends BasePresenter
{	
	
	public function actionDefault($year)
	{
		if ($year == NULL) {$year = 2013;}
		
		$this->template->years = $this->journal->fetchYears();
		$this->template->activeYear = $year;
		$this->template->articles = $this->article->fetchAllByYear($year);
	}
	
	
	public function renderDefault()
	{
		
	}
	
}