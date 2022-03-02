<?php

namespace App\Repositories\Frames;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\Collection;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $_model;

    /**
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * @return void
     * @throws BindingResolutionException
     */
    public function setModel(): void
    {
        $this->_model = app()->make($this->getModel());
    }

    abstract public function getModel();

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->_model->all();
    }

    /**
     * @param  int $id
     * @return Collection
     */
    public function findOrFail(int $id): Collection
    {
        return $this->_model->findOrFail($id);
    }

    /**
     * get product coverage
     * @param int $id
     * @return Collection
     */
    public function find(int $id): Collection
    {
        return $this->_model->find($id);
    }


    /**
     * get product coverage
     * @param array $attributes
     * @return Collection
     */
    public function create(array $attributes): Collection
    {
        return $this->_model->create($attributes);
    }

    /**
     * get product coverage
     * @param array $attributes
     * @return Collection
     */
    public function insert(array $attributes): Collection
    {
        return $this->_model->insert($attributes);
    }

    /**
     * get product coverage
     * @param int $id
     * @param array $attributes
     * @return Collection
     */
    public function update(int $id, array $attributes): Collection
    {
        return $this->findOrFail($id)->update($attributes);
    }

    /**
     * get product coverage
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }
}