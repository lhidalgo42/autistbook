<?php

class DictionariesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dictionaries
	 *
	 * @return Response
	 */
	public function index()
	{
		$dictionaries = Dictionary::all();
		return View::make('dictionaries.index')->with(compact('dictionaries'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dictionaries/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dictionaries
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /dictionaries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function search()
	{
		$query = Input::get('data');
		$dictionaries = Dictionary::where('name','LIKE',$query.'%')->get();
		return $dictionaries;
	}

	/**
	 * Display the specified resource.
	 * GET /dictionaries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id){
		$dictionary = Dictionary::find($id);
		return View::make('dictionaries.show')->with(compact('dictionary'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dictionaries/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dictionaries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dictionaries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}