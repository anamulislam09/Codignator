<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

        $user_object->insertBatch([
            [
                "name" => "Sakib Al Hasan",
                "email" => "sakib@gmail.com",
                "phone_no" => "7899654125",
                "role" => "admin",
                "password" => password_hash("abcde123", PASSWORD_DEFAULT)
            ],
            [
                "name" => "Mashrafi",
                "email" => "Mashrafi@gmail.com",
                "phone_no" => "8888888888",
                "role" => "editor",
                "password" => password_hash("abcde123", PASSWORD_DEFAULT)
            ],
            [
                "name" => "Anam",
                "email" => "anam@gmail.com",
                "phone_no" => "01847309892",
                "role" => "admin",
                "password" => password_hash("anamul123", PASSWORD_DEFAULT)
            ]
        ]);
    }
}
