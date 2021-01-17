<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Customer;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all()->toArray();
        return view('menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'food_name' => 'required',
            'food_price' => 'required'
        ]);
        $menu = new Menu([
            'food_name' => $request->get('food_name'),
            'food_price' => $request->get('food_price')
        ]);
        $menu->save();
        return redirect()->route('menu.create')->with('success',
        'Food Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($food_id)
    {
        $menu= Menu::all();
        return view('menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($food_id)
    {
        $menu = Menu::find($food_id);
        return view('menu.edit', compact('menu', 'food_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $food_id)
    {
        $this->validate($request,[
            'food_name' => 'required',
            'food_price' => 'required'
        ]);
        $menu = Menu::find($food_id);
        $menu->food_name = $request->get('food_name');
        $menu->food_price = $request->get('food_price');
        $menu->save();
        return redirect()->route('menu.index')->with('success','Food Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($food_id)
    {
        $menu = Menu::find($food_id);
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Food Deleted!');
    }
}
