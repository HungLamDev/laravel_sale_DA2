<?php

namespace App\Repositories\Blog;

use App\Repositories\Repositoriesinterface;

interface BlogRepositoryinterface extends Repositoriesinterface
{
     public function getLatestBlog($limit = 3);
}
