<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Dish;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::where('day_of_week', 'Monday')->first();
        return view('menus.index', compact('menu'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $menu = Menu::create(['day_of_week' => 'Monday']);

        $dishes = [
            ['name' => $request->main_dish, 'type' => 'main'],
            ['name' => $request->sub_dish1, 'type' => 'sub1'],
            ['name' => $request->sub_dish2, 'type' => 'sub2'],
        ];

        foreach ($dishes as $dish) {
            $menu->dishes()->create($dish);
        }

        return redirect()->route('menus.index');
    }

    public function edit(Menu $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $menu->dishes()->delete();

        $dishes = [
            ['name' => $request->main_dish, 'type' => 'main'],
            ['name' => $request->sub_dish1, 'type' => 'sub1'],
            ['name' => $request->sub_dish2, 'type' => 'sub2'],
        ];

        foreach ($dishes as $dish) {
            $menu->dishes()->create($dish);
        }

        return redirect()->route('menus.index');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index');
    }
}