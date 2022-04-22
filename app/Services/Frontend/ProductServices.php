<?php
namespace App\Services\Frontend;

use App\Helper\Helper;
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
        return $this->productRepository->findBycolumn(ProductRepositoryInterface::COLUMN_NEW, '=', ProductRepositoryInterface::VALUE_NEW);
    }

    public function getProductFeatured()
    {
        return $this->productRepository->findBycolumn(ProductRepositoryInterface::COLUMN_SELL_NUMBER, '>=', ProductRepositoryInterface::VALUE_SELL_NUMBER);
    }

    /**
     * @param $id
     * @return bool
     */
    public function viewProduct($id)
    {
        $data = $this->productRepository->find($id)->toArray();
        $view = Session('view');
        if (count(isset($view) ? $view : []) > 4) {
            Session()->forget('view');
        }else {
            if (isset($view[$id])) {
                $view[$id]['count_view'] += 1;
            } else {
                $view[$id] = $data;
            }
            Session()->put('view', $view);

        }
        return true;
    }
}