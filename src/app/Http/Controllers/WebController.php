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
}
