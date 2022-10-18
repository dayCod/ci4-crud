<?php

namespace App\Controllers;

use App\Models\UserModel;
use Carbon\Carbon;

class AuthController extends BaseController
{

    public function login_view()
    {
        return view('auth/login');
    }

    public function register_view()
    {
        return view('auth/register');
    }

    public function create_users_account()
    {
        $validation = [
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Field Username Tidak Boleh Kosong'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[user.email]',
                'errors' => [
                    'required' => 'Field Email Tidak Boleh Kosong',
                    'is_unique' => 'Email Sudah Terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Field Password Tidak Boleh Kosong',
                    'min_length' => 'Password Tidak Boleh Kurang dari 6 Karakter'
                ]
            ]
        ];
        if($this->validate($validation)) {
            $users = new UserModel();
            // dd($users);
            $users->save([
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'role' => 0,
                'logged_in' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            session()->setFlashdata('success', 'User Berhasil Dibuat');
            return redirect('login');
        } else {
            return redirect()->back();
        }
    }

    public function login_account()
    {
        $request_data = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')  
        ];
        $user = new UserModel();
        $data = $user->where('email', $request_data['email'])->first();

        if(!empty($data)) {
            $verify_password = password_verify($request_data['password'], $data['password']);
            if($verify_password) {
                if($data['role'] == 0) {
                    $user->where('email', $request_data['email'])->set(['logged_in' => 1])->update();
                    $auth_data = [
                        'username' => $data['username'],
                        'email' => $data['email'],
                        'password' => $data['password'],
                        'logged_in' => $data['logged_in']
                    ];
                    session()->set($auth_data);
                    return redirect()->to(base_url('/'));
                } else {
                    $user->where('email', $request_data['email'])->set(['logged_in' => 1])->update();
                    $auth_data = [
                        'username' => $data['username'],
                        'email' => $data['email'],
                        'password' => $data['password'],
                        'logged_in' => $data['logged_in']
                    ];
                    session()->set($auth_data);
                    return redirect()->to(base_url('/admin/index'));
                }
            } else {
                session()->setFlashdata('errors', 'Password Salah!');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('errors', 'Email Tidak Ditemukan');
            return redirect()->back();
        }
    }

    public function logout_account()
    {
        $user = new UserModel();
        $user->where('email', session()->get('email'))->set(['logged_in' => 0])->update();
        session()->destroy();
        session()->setFlashdata('success', 'Anda Berhasil Logout!');
        return redirect()->to(base_url('/auth/login'));
    }
}
