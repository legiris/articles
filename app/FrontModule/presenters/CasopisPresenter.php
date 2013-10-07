<?php

namespace FrontModule;


class CasopisPresenter extends BasePresenter
{
	
	public function renderDefault()
	{
		
	}
	
	
	public function actionDefault($year, $volume)
	{
		$this->template->articles = $this->article->fetchAllByDate($year, $volume);
		$this->template->journal = $this->journal->loadByDate($year, $volume);
	}
	
}