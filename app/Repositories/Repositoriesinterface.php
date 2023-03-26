<?php

namespace App\Repositories;


interface Repositoriesinterface
{

     //khai báo các hàm interface ở đây 
     public function all();
     public function find(int $id);
     public function create(array $data);
     public function update(array $data, $id);
     public function delete($id);
}
