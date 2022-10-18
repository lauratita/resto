<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order1 = DB::select("select * from orders where status = '1'");
        $order2 = DB::select("select * from orders where status = '2'");
        $order3 = DB::select("select * from orders where status = '3'");
        return view('dashboard.order', [
            'orders' => Order::all(),
            'order1' => $order1,
            'order2' => $order2,
            'order3' => $order3
        ]);
    }

    // public function order()
    // {
    //     $order1 = DB::select("select * from orders where status = '1'");
    //     $order2 = DB::select("select * from orders where status = '2'");
    //     $order3 = DB::select("select * from orders where status = '3'");
    //     return view('dashboard.order', [
    //         'orders' => Order::all(),
    //         'order1' => $order1,
    //         'order2' => $order2,
    //         'order3' => $order3
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'menu' => 'required|max:255',
            'price' => 'required|min:4|max:255',
            'time' => 'required|max:2',
            'status' => 'required'  
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        // dd($request);
        $rules = [
            'name' => 'max:255',
            'menu' => 'max:255',
            'created_at' => 'dd/mm/Y',
            'time' => 'max:2',
            'price' => 'max:255',
        ];

        $validateData = $request->validate($rules);

        Order::where('id', $order->id)
                ->update($validateData);
                return redirect('/admin/order')->with('success', 'Order has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        Order::destroy($order->id);
        return redirect('/admin/order');
    }
}
