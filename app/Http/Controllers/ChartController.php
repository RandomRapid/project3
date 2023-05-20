<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function pizzaOrders()
    {
        $pizzaOrders = DB::table('order')
            ->select('pname', DB::raw('count(*) as total_orders'))
            ->groupBy('pname')
            ->get();
        return view('pizza_orders', compact('pizzaOrders'));
    }
}
