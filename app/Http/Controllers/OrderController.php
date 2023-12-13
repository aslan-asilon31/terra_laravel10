<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class OrderController extends Controller
{
    public function index(){
        $query = "SELECT * FROM orders";
        $orders = DB::connection('mysql1')->select($query);
        return $orders;
    }
}
