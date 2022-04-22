<?php

namespace App\Services\Frontend;

use App\Http\Requests\CartRequest;
use Exception;
use App\Repositories\Repository\Interfaces\OrderRepositoryInterface;
use App\Repositories\Repository\Interfaces\ProductRepositoryInterface;
use Cart;

class OrderServices
{
    protected $orderRepository;

    public function __construct
    (
        OrderRepositoryInterface $orderRepository,
        ProductRepositoryInterface $productRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->orderRepository = $orderRepository;
    }

    public function setAddCart($id , CartRequest $request)
    {
        $product = $this->productRepository->find($id);
        try {
            Cart::add(
                [
                    'id' => $product->id,
                    'name' => $product->name,
                    'qty' => 2,
                    'price' => $product->price,
                    'weight' => 120,
                    'options'=> [
                        'img'=>$product->image
                    ]
                ]);
        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }

        dd(Cart::content()->toArray());
    }
}