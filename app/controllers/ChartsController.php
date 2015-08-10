<?php

class ChartsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /charts
	 *
	 * @return Response
	 */
	public function day()
	{
		return View::make('charts.day');
	}
	/**
	 * Display a listing of the resource.
	 * GET /charts
	 *
	 * @return Response
	 */
	public function week()
	{
		return View::make('charts.day');
	}
	/**
	 * Display a listing of the resource.
	 * GET /charts
	 *
	 * @return Response
	 */
	public function month()
	{
		return View::make('charts.day');
	}



}