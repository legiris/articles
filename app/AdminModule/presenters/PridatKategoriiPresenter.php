<?php

namespace AdminModule;

use Nette\Application\UI\Form;


class PridatKategoriiPresenter extends BasePresenter
{
	/** @var Category */
	protected $category;
	
	protected function startup()
	{
		parent::startup();
		
		// instance of service
		$this->category = $this->context->category;
	}
	
	
	
	protected function createComponentCategoryForm()
	{
		// TODO: kontroly
		$form = new Form();
		$form->addText('name', 'Název kategorie:');
		$form->addText('names', 'Název kategorie (mn. č.):');
		//$form->addText('author', 'Autor:');
		$form->addSubmit('submit', 'Vložit');
		$form->onSuccess[] = callback($this, 'categoryFormSubmitted');
		return $form;
	}
	
	// musi byt public
	public function categoryFormSubmitted($form)
	{
		$data = $form->getValues();
		
		// TODO: kontroly
		
		$this->category->insert((array) $data);	
		$this->flashMessage('Kategorie byla přidána');
		$this->redirect('Homepage:default');
	}
	
	
	
}