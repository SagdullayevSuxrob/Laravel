<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // return response("hello", 200)->cookie('hi', 'Hello-world', 10);
        return response()->json([
            'name' => 'Sukhrob',
            'id' => '5'
        ]);
    }











    public function show(Request $request, $user)
    {
        return view('users.show')->with('name', 'Sukhrob')->with('id', $user);
    }
    public function create(){
        return view("users.create");
    }
    public function store(Request $request){
        // dd($request->email);
    }
    public function edit($user)
    {
        return $user . "userni o'zgartirish";
    }

    public function sleep(){
        return "I am sleeping";
    }
}
