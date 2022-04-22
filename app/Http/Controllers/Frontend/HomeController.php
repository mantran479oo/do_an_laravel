<?php /** @noinspection ALL */

namespace App\Http\Controllers\Frontend;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Repositories\Repository\CatalogRepository;
use App\Repositories\Repository\Interfaces\ProductRepositoryInterface;
use App\Repositories\Repository\OrderRepository;
use App\Repositories\Repository\ProductRepository;
use App\Services\Frontend\ProductServices;
use App\Services\Frontend\CatalogServices;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var ProductServices
     */
    private $productServices;

    /**
     * @param ProductServices $productServices
     */
    public function __construct
    (
        OrderRepository $orderRepository,
        ProductRepository $productRepository,
        ProductServices $productServices,
        CatalogRepository $catalogRepository
    )
    {
        $this->catalogRepository = $catalogRepository;
        $this->order = $orderRepository;
        $this->productRepository = $productRepository;
        $this->productServices = $productServices;
    }

    /**
     * @return View
     */
    public function index()
    {
        $productNew = $this->productServices->getProductNew();
        $productSale = $this->productRepository->getPriceSales();
        $productFeatured = $this->productServices->getProductFeatured();
        return view('frontend.home',compact('productNew','productSale','productFeatured'));
    }


    public function shoppingCart()
    {
        return view('frontend.shopping-cart');
    }

    public function checkoutCart()
    {
        return view('frontend.checkout');
    }

    public function registration()
    {
        return view('frontend.registration');
    }

    public function category(Request $request ,$id)
    {
        $limit = $request->limit;
        $nameCategory = $this->catalogRepository->find($id);
        $product = $this->productRepository->findBycolumn(ProductRepository::COLUMN_CATEGORY_ID,Helper::CONST_EQUAL,$id,8);
        return view('frontend.category-grid',compact('product','nameCategory'));
    }

    public function productDetail(int $id)
    {
        $this->productServices->viewProduct($id);
        $detail = $this->productRepository->getDetail($id);
        return view('frontend.detail-product',compact('detail'));
    }

    public function myAccount()
    {
        return \view('frontend.my-account');
    }
    public function wishList()
    {
        return view('frontend.wishlist');
    }
}
