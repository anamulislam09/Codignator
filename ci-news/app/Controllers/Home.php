<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function about()
    {
        return ('Hello');
    }
    public function user($id)
    {
        return "Welcone anam, Your id is $id";
    }
}
