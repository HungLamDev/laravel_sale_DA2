<?php

namespace App\Service;


interface ServiceInterface
{
     //khai báo các hàm interface ở đây 
     public function all();
     public function find($id);
     public function create(array $data);
     public function update(array $data, $id);
     public function delete($id);
}
