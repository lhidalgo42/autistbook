<?php

class DataController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /data
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /data/create
	 *
	 * @return Response
	 */
	public function create($code,$id,$value)
	{
        $sensor = Sensor::where('code',$code)->where('id',$id)->get();
		if($sensor->count() != 1)
            return "El Codigo o Numero de Sensor no Coincide con ningun registro";

        $data = new Data();
        $data->value = $value;
        $data->sensors_id = $sensor[0]->id;
        $data->save();
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /data
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /data/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = Data::where('sensors_id',$id)->get();
        return $data;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /data/{id}/edit
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
	 * PUT /data/{id}
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
	 * DELETE /data/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}