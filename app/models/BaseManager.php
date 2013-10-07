<?php

//use Nette\DI;

class BaseManager extends Nette\Object
{
	/** @var \DibiConnection */
	protected $dibi;
	
	
	public function __construct(DibiConnection $connection)
	{		
		$this->dibi = $connection;
	}
	
}