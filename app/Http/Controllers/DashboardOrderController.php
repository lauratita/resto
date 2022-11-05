<?php

namespace App\Http\Controllers;

use App\Mail\GoEmail;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class DashboardOrderController extends Controller
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
        return view('homepage.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'no_hp' => 'required|min:10|max:20',
            'people' => 'required|max:2',
            'time' => 'required|max:1',
            'date' => 'required',
            'message' => 'required|max:255',
        ]);
        Order::create($validatedData);


        return redirect('/contact');
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
            'date' => '',
            'time' => '',
            'people' => 'max:2',
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

    public function check_payment(Order $order)
    {
        $code = strtoupper(substr($order->name, 0, 2) . substr($order->no_hp, -2) . 'RST' . Str::random(2) . substr($order->time, 0, 1));
        $price = $order->people * 50000;
        // dd($order);
        Order::where('id', $order->id)
            ->update([
                'status' => '3'
            ]);
        $emailVer = [
            'title' => 'Code Payment',
            'code' => $code,
            'name' => $order->name,
            'people' => $order->people,
            'time' => $order->time,
            'no_hp' =>  $order->no_hp,
            'price' =>  $price,
            'date' => $order->date,
        ];
        $to = $order->email;

        Mail::to($to)->send(new GoEmail($emailVer));
        return redirect('/admin/order')->with('success', 'Order has Been Confirmed');
    }
}