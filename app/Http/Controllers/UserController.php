<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {}
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'Email'=>'required|email'
        ]);
    }
    public function show() {}
    public function update() {}
    public function destroy() {}
    public function edit() {}

    public function store(Request $request)
    {

    }
}
