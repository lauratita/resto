<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_food = DB::select("select * from menus where category = 'Food'");
        $menu_drink = DB::select("select * from menus where category = 'Drink'");
        $menu_dessert = DB::select("select * from menus where category = 'Dessert'");
        $menu_package = DB::select("select * from menus where category = 'Package'");
        return view('dashboard.menu', [
            'menus' => Menu::all(),
            'menus_food' => $menu_food,
            'menus_drink' => $menu_drink,
            'menus_dessert' => $menu_dessert,
            'menus_package' => $menu_package
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.menu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('menu-images');
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|min:4|max:255',
            'description' => 'required|max:255',
            'category' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
        $validateData['image'] = $request->file('image')->store('menu-images');
        }
            
        // dd($validateData);
        Menu::create($validateData);

        return redirect('/admin/menu')->with('success', 'New menu has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $rules = [
            'title' => 'required|max:255',
            'price' => 'required|min:4|max:255',
            'description' => 'required|max:255',
            'category' => 'required',
            'image' => 'image|file|max:1024'
        ];

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('menu-images');
        }

        Menu::where('id', $menu->id)
            ->update($validateData);

        return redirect('/admin/menu')->with('success', 'Menu has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if ($menu->image) {
            Storage::delete($menu->image);
        }
        Menu::destroy($menu->id);
        return redirect('/admin/menu')->with('danger', 'Menu has been Deleted!');
    }
    // public function menu()
    // {
    //     $menu_food = DB::select("select * from menus where category = 'Food'");
    //     $menu_drink = DB::select("select * from menus where category = 'Drink'");
    //     $menu_dessert = DB::select("select * from menus where category = 'Dessert'");
    //     $menu_package = DB::select("select * from menus where category = 'Package'");
    //     return view('dashboard.menu', [
    //         'menus' => Menu::all(),
    //         'menus_food' => $menu_food,
    //         'menus_drink' => $menu_drink,
    //         'menus_dessert' => $menu_dessert,
    //         'menus_package' => $menu_package
    //     ]);
        
    // }
}