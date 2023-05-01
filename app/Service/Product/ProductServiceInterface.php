<?php

namespace App\Service\Product;

use App\Service\Serviceinterface;



interface ProductServiceInterface extends ServiceInterface
{
     public function getRelatedProducts($product, $limit = 4);
     public function getFeaturedProducts();
     public function getProductOnindex($request);
     public function getProductByCategory($categoryName, $request);
}
