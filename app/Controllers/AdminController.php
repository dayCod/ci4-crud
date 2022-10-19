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

    public function edit($id)
    {
        $news_model = new NewsModel();
        $edit = $news_model->where('id', $id)->first();
        return view('admin/edit', ['edit' => $edit]);
    }

    public function update($id)
    {
        $validation = [
            'body' => [
                'rules' => 'required|min_length[50]',
                'errors' => 'Karakter Tidak Boleh Kurang dari 50'
            ]
        ];
        if($this->validate($validation)) {
            $news_model = new NewsModel();
            $update = $news_model->where('id', $id)->set([
                'author' => $this->request->getVar('author'),
                'body' => $this->request->getVar('body'),
            ])->update();
            return $update ? redirect()->to(base_url('/admin/index'))->with('success', 'Data Berhasil Dirubah') : redirect()->back()->with('errors', 'Data Gagal Dirubah');
        }
        session()->setFlashdata('errors', 'Karakter Tidak Boleh Kurang dari 50');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $news_model = New NewsModel();
        $delete = $news_model->where('id', $id)->delete();
        return $delete ? redirect()->to('/admin/index')->with('success', 'Data Berhasil Dihapus') : redirect()->back()->with('errors', 'Terdapat Kesalahan Dalam Sistem');
    }
}
