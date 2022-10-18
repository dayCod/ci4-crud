<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_model = new UserModel();
        $data = [
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => password_hash('admin', PASSWORD_BCRYPT),
            'role' => 1,
            'logged_in' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        $user_model->insert($data);
    }
}
