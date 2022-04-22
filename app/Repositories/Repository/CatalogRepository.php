<?php

namespace App\Repositories\Repository;

use App\Models\Categorie;
use App\Repositories\Frames\EloquentRepository;
use App\Repositories\Repository\Interfaces\CatalogRepositoryInterface;

class CatalogRepository extends EloquentRepository implements CatalogRepositoryInterface
{

    public function getModel()
    {
       return Categorie::class;
    }
}