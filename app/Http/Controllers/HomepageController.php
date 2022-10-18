<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Blog;
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
            'active' => 'home',
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
}
