<?php

namespace App\Repositories\Repository;

use App\Models\Product;
use App\Repositories\Frames\EloquentRepository;
use App\Repositories\Repository\Interfaces\ProductRepositoryInterface;

class ProductRepository extends EloquentRepository implements ProductRepositoryInterface
{

    /**
     * @return string
     */
    public function getModel(): string
    {
        return Product::class;
    }

    public function findBycolumn(string $column, $value)
    {
        return $this->_model::where($column, $value)->get();
    }
}