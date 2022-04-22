<?php

namespace App\Repositories\Repository\Interfaces;

use App\Repositories\Frames\RepositoryInterface;

interface ProductRepositoryInterface extends RepositoryInterface
{
    public const COLUMN_NEW = 'new';
    public const VALUE_NEW = 1;
    public const VALUE_SALE = 2;
    public const COLUMN_CATEGORY_ID = 'category_id';
    public const COLUMN_SELL_NUMBER = 'sell_number';
    public const VALUE_SELL_NUMBER = '5';


    /**
     * @param string $column
     * @param $condition
     * @param $value
     * @return mixed
     */
    public function findBycolumn(string $column , $condition, $value,$limit = 10);

    public function getDetail($id);

}