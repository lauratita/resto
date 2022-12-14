<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $list_count = Order::where('status', '1');
        $count_list = $list_count->count();
        $check_count = Order::where('status', '2');
        $count_check = $check_count->count();
        $succes_count = Order::where('status', '3');
        $count_success = $succes_count->count();
        
        return view('dashboard.index', [
            'orders' => DB::table('orders')
                ->orderBy('id', 'desc')
                ->take(5)
                ->get(),
            'count_list' => $count_list,
            'count_check' => $count_check,
            'count_success' => $count_success
        ]);
    }
}
