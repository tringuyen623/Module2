<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = City::all();
        
        return view('cities.list', compact('cities'));
    }

    public function create(){
        return view('cities.create');
    }

    public function store(){
        $city = new City();
        $city->name = request('name');

        $city->save();

        return redirect()->route('cities.index');
    }

    public function edit($id){
        $city = City::findOrFail($id);

        return view('cities.edit', compact('city'));
    }

    public function update($id){
        $city = City::findOrFail($id);
        $city->name = request('name');
        $city->save();

        return redirect()->route('cities.index');
    }

    public function destroy($id){
        City::destroy($id);

        return redirect()->route('cities.index');
    }
}
