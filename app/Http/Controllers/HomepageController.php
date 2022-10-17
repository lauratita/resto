<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage.index', [
            'menus' => Menu::all()
        ]);
    }
    public function menu()
    {
        return view('homepage.menu', [
            'menus' => Menu::all()
        ]);
    }
}