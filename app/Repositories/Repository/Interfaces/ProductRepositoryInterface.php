<?php

namespace App\Repositories\Repository\Interfaces;

use App\Repositories\Frames\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface extends RepositoryInterface
{
    const COLUMN_NEW = 'new';
    const VALUE_NEW = 1;

    /**
     * @param string $column
     * @param $value
     * @return Collection
     */
    public function findBycolumn(string $column , $value);

}