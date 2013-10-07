<?php

namespace AdminModule;

use Nette\Http\FileUpload;

use AdminModule\BasePresenter;
use Nette\Application\UI\Form;


class PridatClanekPresenter extends BasePresenter
{
	/** var Article */
	protected $article;
	
	/** var Category */
	protected $category;
	
	/** var Journal */
	protected $journal;
	
	protected function startup()
	{
		parent::startup();
		
		// instance of service
		$this->article = $this->context->article;		
		$this->category = $this->context->category;
		$this->journal = $this->context->journal;
	}
	
	
	/**
	 * generate form
	 * @return \Nette\Application\UI\Form
	 */
	protected function createComponentArticleForm()
	{
		$categories = $this->category->fetchOptions();
		$journals = $this->journal->fetchOptions();
		
		$form = new Form();
		$form->addText('title', 'Název:', 60);
		$form->addTextArea('abstract', 'Abstrakt:', 60, 8);
		$form->addText('author', 'Autor / Autoři:', 60);
		$form->addSelect('category_id', 'Vyberte typ:', $categories);
		$form->addSelect('journal_id', 'Vyberte číslo časopisu:', $journals);
		$form->addUpload('file', 'Vložit soubor:');
		$form->addSubmit('submit', 'Vložit');
		$form->onSuccess[] = callback($this, 'articleFormSubmitted');
		return $form;
	}
	
	/**
	 * after form submit
	 * @param \Nette\Application\UI\Form $form
	 */
	public function articleFormSubmitted($form)
	{	
		$title 		= $form['title']->getValue();
		$abstract 	= $form['abstract']->getValue();
		$author 	= $form['author']->getValue();
		$categoryId = $form['category_id']->getValue();
		$journalId 	= $form['journal_id']->getValue();
		$file 		= $form['file']->getValue();
		
		// file info
		$fileName = $file->getName();
		$fileSize = $file->getSize();
		
		// TODO fill in all controls before insert
		if ($file->isOk()) {
			$file->move(WWW_DIR . '/issue/' . $fileName);
		}
		
		$data = array(
			'title' 		=> $title,
			'abstract' 		=> $abstract,
			'author'		=> $author,
			'category_id'	=> $categoryId,
			'journal_id'	=> $journalId,
			'file'			=> $fileName		
		);
		
		$this->article->insert($data);
		$this->flashMessage('Článek byl přidán.');
		$this->redirect('Homepage:default');
	}
	
}