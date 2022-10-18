<?php

namespace App\Controllers;

use App\Models\NewsModel;
use Carbon\Carbon;

class AdminController extends BaseController
{
    
    public function index()
    {
        $news_model = new NewsModel();
        $data = $news_model->findAll();
        // dd($data);
        return view('admin/index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $news_model = new NewsModel();
        $data = [
            'author' => $this->request->getVar('author'),
            'body' => $this->request->getVar('body'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        $news_model->insert($data);
        session()->setFlashdata('success', 'Data Berhasil Dibuat');
        return redirect()->to(base_url('/admin/index')); 
    }

    public function edit()
    {
        # code...
    }

    public function update()
    {
        # code...
    }

    public function delete()
    {
        # code...
    }
}
