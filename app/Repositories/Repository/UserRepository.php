<?php

namespace App\Repositories\Repository;

use App\Repositories\Frames\EloquentRepository;
use App\Repositories\Repository\Interfaces\UserRepositoryInterface;

class UserRepository extends EloquentRepository implements UserRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
    }
}