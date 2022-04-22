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

    public function findBycolumn(string $column,$condition, $value,$limit = 10)
    {
        return $this->_model::where($column,$condition, $value)->paginate($limit);
    }

    public function getPriceSales()
    {
        return $this->_model->with('getSales')
            ->where(
                ProductRepositoryInterface::COLUMN_NEW,
                '=',
                ProductRepositoryInterface::VALUE_SALE)
            ->get();
    }

    public function getDetail($id)
    {
      return  $this->_model::with('getSales')->find($id);
    }

}