<?php /** @noinspection ALL */

namespace App\Http\Controllers\Frontend;

use App\Models\WishList;
use Cart;
use App\Event\RegisteredSendMail;
use App\Http\Controllers\Controller;
use App\Repositories\Repository\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct
    (
        ProductRepositoryInterface $productRepository
    )
    {
        $this->productRepository = $productRepository;
    }

    public function addToCart($id,Request $request)
    {
        $product = $this->productRepository->findOrFail($id);
        $cart = session()->get('cart', []);
        try {
            if(isset($cart[$id])) {
                if($request->quantity){
                    $cart[$id]['quantity'] = $request->quantity + $cart[$id]['quantity'];
                }else {
                    $cart[$id]['quantity']++;
                        }
            } else {
                $cart[$id] = [
                    "name" => $product->name,
                    "quantity" => $request->get('quantity',1) ,
                    "price" => $request->get('price',''),
                    "image" => $product->image,
                    'description' => $product->description,
                    'options' => [
                        'new' => $product->new
                    ]
                ];
            }
            session()->put('cart', $cart);
            $message = __('Thêm sản phẩm thành công');
        }catch (ModelNotFoundException $exception){
            $message = __('Thêm sản phẩm không thành công');
        }

        return Response()->json(['message' => $message]);
    }

    public function remove($id)
    {
        $cart = session('cart');
        try {
            if($id){
                unset($cart[$id]);
                session()->put('cart',$cart);
            }
            $message = __('Thêm sản phẩm thành công');
        } catch (ModelNotFoundException $exception){
            $message = __('Xóa sản phẩm không thành công');
        }

        return Response()->json(['message' => $message]);
    }

    public function addWishList($id)
    {
        $user = session('user',null);
        $message = __('Thêm không thành công');
        if(!empty($user)){
          WishList::create(['product_id'=> $id,'user_id'=>$user['id']]);
          $message = __('Đã thêm thành công');
        }
        return $message;
    }

}