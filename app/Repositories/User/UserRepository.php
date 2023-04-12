<?php

namespace App\Repositories\User;

use App\Repositories\BaseRepositories;
use App\Models\User;

class UserRepository extends BaseRepositories implements UserRepositoryinterface
{

     public function getModel()
     {
          return User::class;
     }
}
