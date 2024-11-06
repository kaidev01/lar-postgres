<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class ApiSportController extends Controller
{
    //
    public function home(Request $request)
    {
        return view('web.api-sports.home');
    }

    public function livescore(Request $request)
    {
        return view('web.api-sports.livescore');
    }

    public function match_detail(Request $request)
    {
        return view('web.api-sports.match_detail');
    }

    public function match_detail_basketball(Request $request)
    {
        return view('web.api-sports.match_detail_basketball');
    }


    public function match_detail_tennis(Request $request)
    {
        return view('web.api-sports.match_detail_tennis');
    }


    public function result(Request $request)
    {
        return view('web.api-sports.result');
    }


    public function schedule(Request $request)
    {
        return view('web.api-sports.schedule');
    }


    public function standing(Request $request)
    {
        return view('web.api-sports.standing');
    }
}
