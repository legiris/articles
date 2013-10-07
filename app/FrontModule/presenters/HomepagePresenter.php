<?php

namespace FrontModule;


class HomepagePresenter extends BasePresenter
{
	public function renderDefault()
	{
		$this->template->articles = $this->article->findLatest();
		$this->template->journalTitle = $this->journal->findLatestTitle();
	}
	
	
}
