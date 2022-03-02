<?php
namespace App\Services\Admin;

use App\Repositories\Repository\Interfaces\ProductRepositoryInterface;
use App\Repositories\Repository\ProductRepository;
use Illuminate\Database\Eloquent\Collection;


class ProductServices
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct
    (
        ProductRepositoryInterface $productRepository
    )
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @return Collection
     */
    public function getProductNew()
    {
        return $this->productRepository->findBycolumn(ProductRepository::COLUMN_NEW,ProductRepository::VALUE_NEW);
    }
}