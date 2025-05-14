<?php

namespace App\Repositories\Eloquent;

use App\Models\Base;
use App\Repositories\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 *  Class BaseRepository.
 */
class BaseRepository implements BaseRepositoryInterface
{
   protected $model;

   public function __construct(Model $model)
   {
      $this->model = $model;
   }

   //select * from 
   public function all()
   {
      return $this->model->all();
   }

   //select * from where id = x
   public function find($id): ?Model
   {
      return $this->model->find($id);
   }

   //insert into model (x) values (y)
   public function create(array $data): Model
   {
      return $this->model->create($data);
   }

   //update model set x=y where id = z
   public function update($id, array $data): Model
   {
      $model = $this->model->find($id);
      $model->update($data);
      return $model;
   }

   // delete model where id = x
   public function delete($id)
   {
      return $this->model->find($id)->delete();
   }
}
