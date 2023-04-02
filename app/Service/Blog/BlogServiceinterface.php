<?php

namespace App\Service\Blog;

use App\Service\ServiceInterface;

interface BlogServiceinterface extends ServiceInterface
{
     public function getLatestBlog($limit = 3);
}
