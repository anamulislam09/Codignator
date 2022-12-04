<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Controllers\BaseController;

class UserCrud extends BaseController
{
    public function index()
    {
        $usersObj = new UserModel();
        $data['myusers'] = $usersObj->orderBy('id')->findAll();
        return view('users_display', $data);
        // echo "<pre>";
        // print_r($data);
    }

    public function create()
    {
        return view('user_create');
    }

    public function store()
    {
        $userobj = new UserModel();
        $data['name'] = $this->request->getVar('name');
        $data['email'] = $this->request->getVar('email');
        $userobj->insert($data);
        $this->response->redirect('/users');
    }
}
