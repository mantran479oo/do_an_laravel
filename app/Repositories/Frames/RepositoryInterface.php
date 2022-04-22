<?php

namespace App\Repositories\Frames;

interface RepositoryInterface
{
    public function getAll();

    public function find(int $id);

    public function create(array $attributes);

    public function update( int $id, array $attributes);

    public function delete(int $id);

    public function insert(array $attributes);

    public function findOrFail($id);
}