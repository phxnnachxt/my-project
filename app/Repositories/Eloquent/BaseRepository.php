<?php

namespace App\Repositories\Eloquent;

use App\Models\Base;
use App\Repositories\BaseRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class BaseRepository.
 */
class BaseRepository extends BaseRepository implements BaseRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Base $model
     */
    public function __construct(Base $model)
    {
        parent::__construct($model);
    }
}
public function all()
{
   return $this->model->all();
}

public function find($id): ?Model
{
   return $this->model->find($id);
}

public function create(array $data): Model
{
   return $this->model->create($data);
}

public function update($id, array $data): Model
{
   $model = $this->model->find($id);
   $model->update($data);
   return $model;
}

public function delete($id)
{
   return $this->model->find($id)->delete();
}


