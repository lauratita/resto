<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Blog;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        $menu_food = DB::select("select * from menus where category = 'Food'");
        $menu_drink = DB::select("select * from menus where category = 'Drink'");
        $menu_dessert = DB::select("select * from menus where category = 'Dessert'");
        $menu_package = DB::select("select * from menus where category = 'Package'");
        return view('homepage.index', [
            'menus' => Menu::all(),
            'menus_food' => $menu_food,
            'menus_drink' => $menu_drink,
            'menus_dessert' => $menu_dessert,
            'menus_package' => $menu_package
        ]);
    }
    public function menu()
    {
        $menu_food = DB::select("select * from menus where category = 'Food'");
        $menu_drink = DB::select("select * from menus where category = 'Drink'");
        $menu_dessert = DB::select("select * from menus where category = 'Dessert'");
        $menu_package = DB::select("select * from menus where category = 'Package'");
        return view('homepage.menu', [
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
            'blogs' => Blog::all(),
        ]);
    }

    public function news_detail(Blog $blog)
    {
        return view('homepage.news-detail', [
            'blogs' => Blog::all(),
            'blog' => $blog
        ]);
    }

    public function gallery()
    {
        return view('homepage.gallery', [
            'galleries' => Gallery::all()
        ]);
    }

    public function create_order(Request $request)
    {
        // dd($_POST);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'no_hp' => 'required|min:10|max:20',
            'people' => 'required|max:2',
            'time' => 'required|max:1',
            'status' => 'required',
            'date' => 'required',
            'message' => 'required|max:255',
        ]);
        Order::create($validatedData);
        // dd('data berhasil');
        return redirect('/homepage/contact')->with('success', 'New Gallery has been added');
    }
}
