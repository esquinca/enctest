<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use DB;

use Jenssegers\Agent\Agent;
use App\Venue;
use App\Survey;

class encController extends Controller
{    
	public function index()
	{
		return view('main_load');
	}

	public function index2($no_enc)
	{
        $id_survey = $no_enc;
        $search_questions = Survey::find($id_survey)->surveys()->where('survey_id', $id_survey)->get();
        $id_venue = DB::table('survey_venue')->select('venue_id')->where('survey_id', '=', $id_survey)->value('venue_id');
        $hotels = Venue::select('name')->where('id', $id_venue)->value('name');
        
        
		return view('guest.survey',compact('hotels', 'search_questions'));
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
	}

	public function macquery(Request $request)
	{
		$codenum = "0";
		$agent = new Agent();

		$sip = $request->sip;
		$mac = $request->mac;
		$client_mac = $request->client_mac;
		$uip = $request->uip;
		$venue_ssid = $request->ssid;
		$vlan = $request->vlan;

		$platform = $agent->platform();
        $browser = $agent->browser();
        $version1 = $agent->version($browser);
        $device = 5;

        if ($agent->isDesktop()) {
        	$device = 4;
        }elseif ($agent->isTablet()) {
        	$device = 3;
        }elseif ($agent->isAndroidOS()) {
        	$device = 2;
        }elseif ($agent->is('iPhone') || $agent->is('iOS')) {
        	$device = 1;
        }else{
        	$device = 5;
        }

		$res = DB::table('guests')->select('guest_mac')->where('guest_mac', '=', $client_mac)->value('guest_mac');
		
		$ssid = DB::table('venues')->select('id')->where('SSID', '=', $venue_ssid)->value('id');

		//$result = DB::select('CALL GetGuestSurvey(?, ?, ?)', array($venue, $survey, $client_mac));

		$resultp2 = DB::select('CALL GetEncuestaP2(?, ?)', array($venue_ssid, $client_mac));
		$resultp3 = DB::select('CALL GetEncuestaP3(?, ?)', array($venue_ssid, $client_mac));

		if (empty($res)) {
			$datos = [
			 'guest_ip' => $uip,
			 'station_mac' => $mac,
			 'guest_mac' => $client_mac,
			 'ssid' => $venue_ssid,
			 'user_agent' => $platform,
			 'web_browser' => $browser,
			 'ver_browser' => $version1,
			 'device_id' => $device
			];
			$this->insertNewGuest($datos);
			$priority = DB::table('survey_venue')->select('survey_id')->where('priority_id', '=', 1)->value('survey_id');
			$codenum = "0";
			return $priority;
		}else if($resultp2[0]->count === 0){
			// validacon del procedure enc2 y 3
			$codenum = "1";
			$priority = DB::table('survey_venue')->select('survey_id')->where('priority_id', '=', 2)->value('survey_id');
			return $priority;
		}
		else if($resultp3[0]->count === 0){
			$priority = DB::table('survey_venue')->select('survey_id')->where('priority_id', '=', 3)->value('survey_id');
			//$codenum = "2";
			return $priority;
		}else{
			//$codenum = "3";
			return 'FALSE';
		}
		
	}

	public function testfunc()
	{
        $agent = new Agent();
        $bool = $agent->isDesktop();
        $device = $agent->device();

        // iPhone
        // iOS
        $languages = $agent->languages();

        $browser = $agent->browser();
        $version1 = $agent->version($browser);

        $platform = $agent->platform();
        $version2 = $agent->version($platform);

     $res = DB::table('guests')->select('guest_mac')->where('guest_mac', '=', 'EC:9B:F3:6F:F6:40')->value('guest_mac');
        $ssid = DB::table('venues')->select('id')->where('SSID', '=', 'PRUEBA1-X')->value('id');
        //$result = DB::select('CALL GetGuestSurvey(?, ?, ?)', array(1, 4, 'EC:9B:F3:6F:F6:47'));
        $resultp2 = DB::select('CALL GetEncuestaP2(?, ?)', array('PRUEBA1-X', 'EC:9B:F3:6F:F6:47'));
		$resultp3 = DB::select('CALL GetEncuestaP3(?, ?)', array('PRUEBA1-X', 'EC:9B:F3:6F:F6:47'));


		dd($device, $platform);

        
	}

}
