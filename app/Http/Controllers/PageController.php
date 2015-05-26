<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{
		$view = \View();

		// example using Debugbar
		\Debugbar::info($view);
		\Debugbar::error('Error!');
		\Debugbar::warning('Watch out…');
		\Debugbar::addMessage('Another message', 'label name	');

		return view('pages/home');
	}

}
