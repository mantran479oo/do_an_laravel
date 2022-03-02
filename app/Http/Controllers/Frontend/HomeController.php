<?php /** @noinspection ALL */

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Repository\Interfaces\ProductRepositoryInterface;
use App\Services\Admin\ProductServices;
use Illuminate\Contracts\View\View;

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
        ProductServices $productServices
    )
    {
        $this->productServices = $productServices;
    }

    /**
     * @return View
     */
    public function index()
    {
        $productNew = $this->productServices->getProductNew();
        return view('frontend.home',compact('productNew'));
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

    public function category()
    {
        return view('frontend.category');
    }
}
