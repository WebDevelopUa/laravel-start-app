<?php

namespace App\Http\Controllers;

class NewController extends Controller
{
    public function index()
    {
        echo "New Controller";
        return view("new_controller_view");
    }
}
