<?php

namespace App\Repositories\Product;

use App\Repositories\Repositoriesinterface;

interface ProductRepositoriesinterface extends Repositoriesinterface
{
     public function getRelatedProducts($product, $limit = 4);
     public function getFeaturedProductsbyCategory(int $categoryId);
     public function  getProductOnindex($request);
     public function getProductBYCategory($categoryName, $request);
}
