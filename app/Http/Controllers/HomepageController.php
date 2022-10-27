<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Blog;
use App\Models\Order;
use App\Models\Gallery;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HomepageController extends Controller
{
    public function index()
    {
        $menu_food = DB::select("select * from menus where category = 'Food'");
        $menu_drink = DB::select("select * from menus where category = 'Drink'");
        $menu_dessert = DB::select("select * from menus where category = 'Dessert'");
        $menu_package = DB::select("select * from menus where category = 'Package'");
        $blogs = DB::table('blogs')->skip(0)->take(3)->get();
        return view('homepage.index', [
            'active' => 'home',
            'menus' => Menu::all(),
            'menus_food' => $menu_food,
            'menus_drink' => $menu_drink,
            'menus_dessert' => $menu_dessert,
            'menus_package' => $menu_package,
            'blogs'=> $blogs 
        ]);
    }
    public function menu()
    {
        $menu_food = DB::select("select * from menus where category = 'Food'");
        $menu_drink = DB::select("select * from menus where category = 'Drink'");
        $menu_dessert = DB::select("select * from menus where category = 'Dessert'");
        $menu_package = DB::select("select * from menus where category = 'Package'");
        return view('homepage.menu', [
            'active' => 'menu',
            'menus' => Menu::all(),
            'menus_food' => $menu_food,
            'menus_drink' => $menu_drink,
            'menus_dessert' => $menu_dessert,
            'menus_package' => $menu_package
        ]);
    }

    public function news()
    {
        return view('homepage.news', [
            'active' => 'news',
            'blogs' => Blog::all(),
        ]);
    }

    public function news_detail(Blog $blog)
    {
        return view('homepage.news-detail', [
            'active' => 'news',
            'blogs' => Blog::all(),
            'blog' => $blog
        ]);
    }

    public function gallery()
    {
        return view('homepage.gallery', [
            'active' => 'gallery',
            'galleries' => Gallery::all()
        ]);
    }
    public function story()
    {
        return view('homepage.story', [
            'active' => 'story'
        ]);
    }
    public function contact()
    {
        return view('homepage.contact', [
            'active' => 'contact'
        ]);
    }
    public function payment(Request $request)
    {
        // dd($request->all());
        $payment = DB::select("select * from `orders` where `code` = '$request->code'");
        // return ($payment);
        // die;

        return view('homepage.payment', [
            'active' => 'payment',
            'payment' => $payment
        ]);
    }

    public function update_payment(Request $request, Order $order)
    {
        // dd($request->all());
        // $payment = DB::select("select * from `orders` where `code` = '$request->code'");
        // return ($payment);
        // die;

        $image = $request->file('image')->store('order-images');

        DB::table('orders')->where('id', $request->id)
            ->update([
                'status' => 2,
                'image' => $image
            ]);

        // return view('homepage.contact', [
        //     'active' => 'contact'
        // ]);
    }

    public function check_payment(Request $request, Order $order)
    {
        Order::where('id', $order->id)
            ->update([
                'status' => '3'
            ]);
        return redirect('/admin/order')->with('success', 'Order has Been Updated');
    }

    public function create_order(Request $request)
    {
        // dd($request->all());
        $code = strtoupper(substr($request->name, 0, 2) . substr($request->no_hp, -2) . 'RST' . Str::random(2) . substr($request->time, 0, 1));
        // dd($code)
        $price = $request->people * 50000;

        Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'people' => $request->people,
            'time' => $request->time,
            'no_hp' =>  $request->no_hp,
            'price' =>  $price,
            'date' => $request->date,
            'message' => $request->message,
            'status' => '1',
            'code' => $code
        ]);
        // dd('berhasil');
        $isi_email = [
            'title' => 'Code',
            'body' => $code
        ];
        $to = $request->email;

        Mail::to($to)->send(new SendEmail($isi_email));
        return redirect('/payment');
    }
    public function code_payment()
    {
        return redirect('/payment/' . $_POST['code']);
        // return redirect('/payment/');
    }
}