<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingController extends Controller
{
  public function index_create()
  {
      return view('permitted.marketing.create');
  }
  public function index_edit()
  {
      return view('permitted.marketing.edit');
  }
}
