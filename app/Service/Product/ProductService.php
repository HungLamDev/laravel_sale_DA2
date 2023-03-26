<?php

namespace App\Service\Product;

use App\Repositories\Product\ProductRepositoriesinterface;
use App\Service\BaseService;
use App\Service\Product\ProductServiceInterface;

class ProductService extends BaseService implements ProductServiceInterface
{
     public $repository;
     public function __construct(ProductRepositoriesinterface $productRepository)
     {
          $this->repository = $productRepository;
     }
     public function find($id)
     {

          $product = $this->repository->find($id);

          $avgRating = 0;
          $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
          $countRating = count($product->productComments);
          if ($countRating != 0) {
               $avgRating = $sumRating / $countRating;
          }
          $product->avgRating = $avgRating;
          return $product;
     }
}
