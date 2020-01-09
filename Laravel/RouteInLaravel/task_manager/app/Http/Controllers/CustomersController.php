<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        return view('modules.customer.index');
    }

    public function create(){
        return view('modules.customer.create');
    }

    public function store(Request $request){
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        return view('modules.customer.index', compact('name', 'phone', 'email'));
    }
}
