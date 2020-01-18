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
        City::create($this->validateCity());

        return redirect()->route('cities.index');
    }

    public function edit(City $city){
        return view('cities.edit', compact('city'));
    }

    public function update(City $city){
        $city->update($this->validateCity());

        return redirect()->route('cities.index');
    }

    public function destroy(City $city){
        City::destroy($city->id);

        return redirect()->route('cities.index');
    }

    public function validateCity(){
        return request()->validate([
            'name' => 'required'
        ]);
    }
}
