<?php

namespace FrontModule;

// for stable if error "Class 'FrontModule\Nette\Application\UI\presenter' not found" 
use Nette;

/**
 * Base presenter for all application presenters.
 * We can work with DB layer in presenter e.g. $this->db->query('SELECT * FROM article');
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	/** @var DibiConnection */
	private $db;
	
	/** @var Journal */
	protected $journal;
	
	/** @var Article */
	protected $article;
	
	protected function startup()
	{
		parent::startup();
		
		// instance of service and save into presenters' property
		$this->db = $this->context->dibi->connection;
		$this->journal = $this->context->journal;
		$this->article = $this->context->article;	
	}	
	
	/**
	 * render issues in menu
	 */
	public function beforeRender()
	{
		$this->template->issues = $this->journal->fetchAllByCount(5);
	}
	
		
}
