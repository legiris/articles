<?php

use Nette\Application\Routers\RouteList,
	Nette\Application\Routers\Route,
	Nette\Application\Routers\SimpleRouter;


/**
 * Router factory.
 */
class RouterFactory
{

	/**
	 * @return Nette\Application\IRouter
	 */
	public function createRouter()
	{
		$router = new RouteList();
		
		$router[] = new Route('index.php', array(
			'module'	=> 'Front',
			'presenter'	=> 'Homepage',
			'action'	=> 'default'
		), Route::ONE_WAY);

		$router[] = new Route('admin/<presenter>/<action>[/<id>]', array( 
			'module'	=> 'Admin',
			'presenter' => 'Homepage',
			'action'	=> 'default',
			'id'		=> NULL
		));
		
		$router[] = new Route('casopis/<year>-<volume>', array(
			'module'	=> 'Front',
			'presenter'	=> 'Casopis',
			'action'	=> 'default',
		));
		
		$router[] = new Route('archiv/[<year>]', array(
			'module'	=> 'Front',
			'presenter' => 'Archiv',
			'action'	=> 'default'
		));
				
		$router[] = new Route('<presenter>/<action>[/<id>]', array(
			'module'	=> 'Front',
			'presenter' => 'Homepage',
			'action'	=> 'default',
			'id'		=> NULL	
		));
		
		//$router[] = new Route('index.php', 'Homepage:default', Route::ONE_WAY);
		return $router;
	}

}
