<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table            = 'news';
    protected $allowedFields    = ['author', 'body', 'created_at', 'updated_at'];
}
