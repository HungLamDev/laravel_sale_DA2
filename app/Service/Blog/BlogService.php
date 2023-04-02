<?php

namespace App\Service\Blog;

use App\Repositories\Blog\BlogRepositoryinterface;
use App\Service\BaseService;

class BlogService extends BaseService implements BlogServiceinterface
{

     public $repository;
     public function __construct(BlogRepositoryinterface $BlogRepository)
     {
          $this->repository = $BlogRepository;
     }
     public function getLatestBlog($limit = 3)
     {
          return $this->repository->getLatestBlog($limit);
     }
}
