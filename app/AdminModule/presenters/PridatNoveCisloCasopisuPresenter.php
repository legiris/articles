<?php

namespace AdminModule;

use Nette\Application\UI\Form;


class PridatNoveCisloCasopisuPresenter extends BasePresenter
{
	/** var Journal */
	protected $journal;
	
	protected function startup()
	{
		parent::startup();

		// instance of service
		$this->journal = $this->context->journal;	
	}
	
	
	protected function createComponentJournalForm()
	{
		$form = new Form;
		$form->addText('title', 'Název:', 60);
		$form->addText('volume', 'Číslo:', 4);
		$form->addText('year', 'Rok:', 4);
		$form->addSubmit('submit', 'Vložit');
		$form->onSuccess[] = callback($this, 'JournalFormSubmitted');
		return $form;
	}
	
	
	public function JournalFormSubmitted($form)
	{
		$data = $form->getValues();
		$this->journal->insert((array) $data);
		$this->flashMessage('Číslo časopisu bylo úspěšně vloženo.');
		$this->redirect('Homepage:default');
	}
	
}