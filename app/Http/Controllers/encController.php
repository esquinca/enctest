<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use DB;

class encController extends Controller
{    
	public function index()
	{
		return view('main_load');
	}

	public function index2()
	{
		return view('enc2');
	}

	public function index3()
	{
		return view('enc3');
	}

	public function index4()
	{
		return view('enc4');
	}

	public function cacheValues(Request $request)
	{
		session(['sip' => $request->sip]);
		session(['mac' => $request->mac]);
		session(['client_mac' => $request->client_mac]);
		session(['uip' => $request->uip]);
		session(['ssid' => $request->ssid]);
		session(['vlan' => $request->vlan]);
		session(['res' => $request->res]);
		session(['auth' => $request->auth]);
		return 'OK';
	}

	public function macquery()
	{


		//$res = DB::table('guests')->select('guest_mac')->where('guest_mac', '=', 'EC:9B:F3:6F:F6:49')->first();

		$res = DB::table('guests')
        ->whereExists(function ($query) {
            $query->select(DB::raw(1))
				->from('guests')
				->where('guest_mac', '=', 'EC:9B:F3:6F:F6:47');
            })
            ->get();

		// if ($res === TRUE) {
		// 	//dd($res);
		// 	return '1';
		// }else{
		// 	//dd($res);
		// 	return '0';
		// }

		dd($res);
	}

}
