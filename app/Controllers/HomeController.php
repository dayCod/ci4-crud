<?php

namespace App\Controllers;

use App\Models\NewsModel;

class HomeController extends BaseController
{
    public function index()
    {
        $news_model = new NewsModel();
        return view('homepage/index', [
            'news' => $news_model->findAll(),
        ]);
    }

    public function detail($id)
    {
        $news = new NewsModel();
        return view('homepage/detail', [
            'news' => $news->where('id', $id)->first()
        ]);
    }
}
