<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Session;
use Validator;
use Theme;
use Redirect;
use View;

class WelcomeController extends Controller
{

    public function __construct()
    {
      //  $this->middleware('auth');
      //  $this->middleware('demand-history', ['only' => ['update', 'store']]);
    }

    public function index()
    {
      return view::make('welcome');
    }
}
