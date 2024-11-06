<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class WebController extends Controller
{
    //

    public function index()
    {
        return view('web.pages.index');
    }

    public function testDB()
    {
        try {
            $result = DB::select('SELECT version()');
            return response()->json([
                'status' => 'success',
                'message' => 'Connected to PostgreSQL!',
                'version' => $result[0]->version,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to connect to PostgreSQL: ' . $e->getMessage(),
            ]);
        }
    }

    public function testRedis()
    {
        try {
            Redis::set('test_key', 'Hello Redis!');
            $value = Redis::get('test_key');

            return response()->json([
                'status' => 'success',
                'message' => 'Connected to Redis!',
                'data' => $value,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to connect to Redis: ' . $e->getMessage(),
            ]);
        }
    }

    public function tennis()
    {
        return view('web.pages.tennis');
    }

    public function football()
    {
        return view('web.pages.football');
    }

    public function basketball()
    {
        return view('web.pages.basketball');
    }

    public function test()
    {
        return view('web.pages.test');
    }

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
