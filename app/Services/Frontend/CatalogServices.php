<?php

namespace App\Services\Frontend;

use App\Models\Categorie;
use App\Repositories\Repository\Interfaces\CatalogRepositoryInterface;

class CatalogServices
{
    public function __construct
    (
        CatalogRepositoryInterface $catalogRepository
    )
    {
        $this->catalog =$catalogRepository;
    }

}