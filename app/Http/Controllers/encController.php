<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use DB;

use Jenssegers\Agent\Agent;

class encController extends Controller
{    
	public function index()
	{
		return view('main_load');
	}

	public function index2()
	{
		return view('enc1');
	}

	public function index3()
	{
		return view('enc2');
	}

	public function index4()
	{
		return view('enc3');
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


		// $datos = [
		//  'tema' => $subject,
		//  'ip' => $host,
		//  'hotel' => $nombrehotel,
		//  'nombre' => $nombre,
		//  'mensaje' => $msj,
		// ];

		return 'OK';
	}

	public function insertNewGuest($data)
	{
		DB::table('guests')->insert($data);
		
		// DB::table('guests')->insert([
		// 	'' => ,
		// ]);
	}

	public function macquery(Request $request)
	{
		$codenum = "0";
		$client_mac = $request->client_mac;
		$venue_ssid = $request->ssid;

		$data = [];

		$res = DB::table('guests')->select('guest_mac')->where('guest_mac', '=', $client_mac)->value('guest_mac');
		
		$ssid = DB::table('venues')->select('id')->where('SSID', '=', $venue_ssid)->value('id');

		//$result = DB::select('CALL GetGuestSurvey(?, ?, ?)', array($venue, $survey, $client_mac));

		$resultp2 = DB::select('CALL GetEncuestaP2(?, ?)', array($venue_ssid, $client_mac));
		$resultp3 = DB::select('CALL GetEncuestaP3(?, ?)', array($venue_ssid, $client_mac));

		if (empty($res)) {
			return $codenum;
		}else if($resultp2[0]->count === 0){
			// validacon del procedure enc2 y 3
			$codenum = "1";
			return $codenum;
		}
		else if($resultp3[0]->count === 0){
			$codenum = "2";
			return $codenum;
		}else{
			$codenum = "3";
			return $codenum;
		}
		
	}

	public function testfunc()
	{
        $agent = new Agent();
        $bool = $agent->isDesktop();

        $languages = $agent->languages();

        $browser = $agent->browser();
        $version1 = $agent->version($browser);

        $platform = $agent->platform();
        $version2 = $agent->version($platform);

        $ssid = DB::table('venues')->select('id')->where('SSID', '=', 'PRUEBA1-X')->value('id');
        //$result = DB::select('CALL GetGuestSurvey(?, ?, ?)', array(1, 4, 'EC:9B:F3:6F:F6:47'));
		$resultp2 = DB::select('CALL GetEncuestaP3(?, ?)', array('PRUEBA1-X', 'EC:9B:F3:6F:F6:47'));



        dd($resultp2[0]->count);
	}

}
