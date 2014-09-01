<?php

use HireMe\Repositories\CategoryRepo;

class CandidatesController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $categoryRepo;

	public function __construct(CategoryRepo $categoryRepo){
		$this->categoryRepo  = $categoryRepo;
	}

	public function category($slug, $id)
	{
		$category = $this->categoryRepo->find($id);

		dd($category);
	}

	public function showWelcome()
	{
		return View::make('home');
	}

}