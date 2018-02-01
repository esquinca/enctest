<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTwoController extends Controller
{
  public function index()
  {
      return view('permitted.dashboard.survey');
  }
}
