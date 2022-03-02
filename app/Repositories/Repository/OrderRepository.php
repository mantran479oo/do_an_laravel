<?php

namespace App\Repositories\Repository;

use App\Repositories\Frames\EloquentRepository;
use App\Repositories\Repository\Interfaces\OrderRepositoryInterface;

class OrderRepository extends EloquentRepository implements OrderRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
    }
}