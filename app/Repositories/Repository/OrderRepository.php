<?php

namespace App\Repositories\Repository;

use App\Http\Requests\CartRequest;
use App\Models\OrderItem;
use App\Models\Product;
use App\Repositories\Frames\EloquentRepository;
use App\Repositories\Repository\Interfaces\OrderRepositoryInterface;
use Cart;

class OrderRepository extends EloquentRepository implements OrderRepositoryInterface
{

    public function getModel()
    {
       return OrderItem::class;
    }
}