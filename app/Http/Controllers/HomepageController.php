<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Gallery;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

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
    public function gallery()
    {
        return view('homepage.gallery', [
            'galleries' => Gallery::all()
        ]);
    }
    public function cetak_pdf()
    {
        $menu_food = DB::select("select * from menus where category = 'Food'");
        $menu_drink = DB::select("select * from menus where category = 'Drink'");
        $menu_dessert = DB::select("select * from menus where category = 'Dessert'");
        $menu_package = DB::select("select * from menus where category = 'Package'");

        return view('homepage.menu_pdf', [
            'menus' => Menu::all(),
            'menus_food' => $menu_food,
            'menus_drink' => $menu_drink,
            'menus_dessert' => $menu_dessert,
            'menus_package' => $menu_package
        ]);
        // $pdf = PDF::loadview('homepage.menu_pdf', [
        //     'menus' => Menu::all(),
        //     'menus_food' => $menu_food,
        //     'menus_drink' => $menu_drink,
        //     'menus_dessert' => $menu_dessert,
        //     'menus_package' => $menu_package
        // ])->setOptions(['defaultFont' => 'sans-serif']);
        // return $pdf->download('Menu-Resto.pdf');
    }
}