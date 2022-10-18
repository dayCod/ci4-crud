<?php

namespace App\Database\Seeds;

use App\Models\NewsModel;
use Carbon\Carbon;
use CodeIgniter\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $news_model = new NewsModel();
        $data = [
            'author' => 'admin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem itaque, sequi esse rem numquam a ad ipsa rerum sint illo laudantium, quaerat, quo mollitia ipsam doloremque neque totam exercitationem animi eligendi recusandae iusto facere quia! Corrupti quae inventore praesentium similique commodi debitis ad asperiores deserunt ipsum quam! Repellat corporis cupiditate animi laborum alias ea ipsum fugiat modi sequi consequatur nobis id vel, distinctio aut eveniet aspernatur expedita aliquam veritatis aliquid tempora exercitationem vero eaque necessitatibus quasi! Quia, placeat. Vel ipsam expedita voluptates eius veniam vitae architecto fugiat consectetur ea amet! Fugiat, ratione molestias. A nesciunt reiciendis necessitatibus, eius delectus consectetur.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        $news_model->insert($data);
    }
}
