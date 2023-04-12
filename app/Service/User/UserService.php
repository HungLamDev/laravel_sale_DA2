<?php

namespace App\Service\User;

use App\Repositories\User\UserRepositoryinterface;
use App\Service\BaseService;

class UserService extends BaseService implements UserServiceinterface
{

     public $repository;
     public function __construct(UserRepositoryinterface $UserRepository)
     {
          $this->repository = $UserRepository;
     }
}
