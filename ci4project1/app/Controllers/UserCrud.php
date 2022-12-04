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

        // helper(['form']);
        $rules = [
            'name' => 'required',   ///validation
            'email' => 'required',

        ];

        if ($this->validate($rules)) {

            $userobj = new UserModel();
            $data['name'] = $this->request->getVar('name');
            $data['email'] = $this->request->getVar('email');
            $userobj->insert($data);
            $this->response->redirect('/users');
        } else {
            $data['validtion'] = $this->validator;
            return view('user_create', $data);
        }
    }

    public function delete($id)
    {
        $userobj = new UserModel();
        $userobj->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users'));
    }

    public function edit($id)
    {
        $userobj = new UserModel();
        $data['user'] = $userobj->find($id);
        // print_r($data);
        return view('user_edit', $data);
    }
    public function update()
    {
        $userobj = new UserModel();
        $id = $this->request->getVar('id');
        $data['name'] = $this->request->getVar('name');
        $data['email'] = $this->request->getVar('email');

        $userobj->update($id, $data);
        return $this->response->redirect(site_url('/users'));
    }
}
