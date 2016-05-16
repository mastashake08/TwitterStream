<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\StartStream;
use App\Events\StopStream;
use App\Http\Requests;

class StreamController extends Controller
{
    //
    public function start(){
      event(new StartStream());
    }

    public function stop(){
      event(new StopStream());
    }
}
