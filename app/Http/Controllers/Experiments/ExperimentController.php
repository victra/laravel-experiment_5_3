<?php

namespace App\Http\Controllers\Experiments;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Session;
use Validator;
use Theme;
use Redirect;
use View;

class ExperimentController extends \App\Http\Controllers\Controller
{

    public function __construct()
    {
      //  $this->middleware('auth');
      //  $this->middleware('demand-history', ['only' => ['update', 'store']]);
    }

    public function exp_1()
    {
      return view::make('experiment.exp_1');
    }

    public function create()
    {
      return view::make('experiment.exp_2');
    }
}
