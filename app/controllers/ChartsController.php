<?php

class ChartsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /charts
	 *
	 * @return Response
	 */
	public function day($id)
	{
		$day = 24*60*60;
		$now = time();
		$range = 60*30;
		$count = $day/$range;
		$sensor = Sensor::where('patients_id',$id)->get()->first()->id;
        $name = Patient::find($id)->name;
		for($i=0;$i<$count;$i++)
		{
            $start = $now-$i*$range;
            $end = $now-($i+1)*$range;
            $prom = $now-($i+0.5)*$range;
            $value = Data::where('sensors_id',$sensor)->whereBetween('created_at', array(date("Y-m-d H:i:s",$end), date("Y-m-d H:i:s",$start)))->avg('value');
            $data[$i][$name] = round($value,2);
            $data[$i]['period'] = date("Y-m-d H:i:s",$prom);

		}
		return View::make('charts.day')->with(compact('data'));
	}
	/**
	 * Display a listing of the resource.
	 * GET /charts
	 *
	 * @return Response
	 */
	public function week($id)
	{
        $day = 24*60*60*7;
        $now = time();
        $range = 60*15*7;
        $count = $day/$range;
        $sensor = Sensor::where('patients_id',$id)->get()->first()->id;
        $name = Patient::find($id)->name;
        for($i=0;$i<$count;$i++)
        {
            $start = $now-$i*$range;
            $end = $now-($i+1)*$range;
            $prom = $now-($i+0.5)*$range;
            $value = Data::where('sensors_id',$sensor)->whereBetween('created_at', array(date("Y-m-d H:i:s",$end), date("Y-m-d H:i:s",$start)))->avg('value');
            $data[$i][$name] = round($value,2);
            $data[$i]['period'] = date("Y-m-d H:i:s",$prom);

        }
        return View::make('charts.week')->with(compact('data'));
	}
	/**
	 * Display a listing of the resource.
	 * GET /charts
	 *
	 * @return Response
	 */
	public function month($id)
	{
        $day = 24*60*60*30;
        $now = time();
        $range = 60*7.5*30;
        $count = $day/$range;
        $sensor = Sensor::where('patients_id',$id)->get()->first()->id;
        $name = Patient::find($id)->name;
        for($i=0;$i<$count;$i++)
        {
            $start = $now-$i*$range;
            $end = $now-($i+1)*$range;
            $prom = $now-($i+0.5)*$range;
            $value = Data::where('sensors_id',$sensor)->whereBetween('created_at', array(date("Y-m-d H:i:s",$end), date("Y-m-d H:i:s",$start)))->avg('value');
            $data[$i][$name] = round($value,2);
            $data[$i]['period'] = date("Y-m-d H:i:s",$prom);

        }
        return View::make('charts.month')->with(compact('data'));
	}



}