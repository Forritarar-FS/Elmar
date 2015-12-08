<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Posts;

class MainController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
		return view('index');
	}

	public function dota2()
	{
		return view('dota2');
	}

	public function lol()
	{
		return view('lol');
	}

	public function hearthstone()
	{
		return view('hearthstone');
	}


}
