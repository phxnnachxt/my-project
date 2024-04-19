<?php

namespace App\Repositories\Eloquent;

use App\Models\Base;

use App\Repositories\MasterRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

class MasterRepository extends BaseRepository implements MasterRepositoryInterface
//ประกาศว่ารอบรับ Interface โดยเงือนไข Repository จะต้องมีเมธอดทั้งหมดที่ Interface กำหนดไว้
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    private function buildSearchQuery($query, $param, $searchFields)
    {
        if (isset($param['searchValue'])) {

            foreach ($searchFields as $field) {
                $query->orWhere($field, "like", '%' . $param['searchValue'] . '%');
            }
        }

        return $query;
    }

    public function paginate($param, ?array $searchFields = null, ?array $withRelations = null, ?array $where = null, $whereRaw): Collection
    {
        $query = $this->model->orderBy($param['columnName'], $param['columnSortOrder']);
        if ($where !== null) {
            $query->where($where);
        }
        // Add raw WHERE condition
        if ($whereRaw !== null) {
            $query->whereRaw($whereRaw);
        }

        $query = $this->buildSearchQuery($query, $param, $searchFields);
        // If $withRelations is provided, add the with clauses to the query
        if ($withRelations !== null && is_array($withRelations)) {
            $query->with($withRelations);
        }
        return $query->skip($param['start'])
            ->take($param['rowperpage'])
            ->get();
    }

    public function getAll($param, ?array $searchFields = null, ?array $withRelations = null): Collection
    {
        $query = $this->model->orderBy($param['columnName'], $param['columnSortOrder']);

        $query = $this->buildSearchQuery($query, $param, $searchFields);
        // If $withRelations is provided, add the with clauses to the query
        if ($withRelations !== null && is_array($withRelations)) {
            $query->with($withRelations);
        }
        return $query->get();
    }

    public function selectCustomData(?array $where = null, $whereRaw, ?array $rawFields = null, ?array $orderBy = null, ?array $groupBy = null, ?array $joinConditions = null, ?array $withRelations = null): ?Collection
    {

        $query = $this->model->where($where);
        // Add raw WHERE condition
        if ($whereRaw !== null) {
            $query->whereRaw($whereRaw);
        }
        // Add join conditions if provided
        if ($joinConditions !== null && is_array($joinConditions)) {
            foreach ($joinConditions as $joinTable => $joinCondition) {
                $query->join($joinTable, $joinCondition[0], $joinCondition[2]);
            }
        }

        // If $withRelations is provided, add the with clauses to the query
        if ($withRelations !== null && is_array($withRelations)) {
            $query->with($withRelations);
        }

        // If $rawFields is provided, add a selectRaw clause to the query
        if ($rawFields !== null && is_array($rawFields) && count($rawFields) > 0) {
            $query->selectRaw(implode(', ', $rawFields));
        }

        // If $orderBy is provided, add an orderBy clause to the query
        if ($orderBy !== null && is_array($orderBy) && count($orderBy) > 0) {
            foreach ($orderBy as $column => $direction) {
                $query->orderBy($column, $direction);
            }
        }

        // If $groupBy is provided, add a groupBy clause to the query
        if ($groupBy !== null && is_array($groupBy) && count($groupBy) > 0) {
            $groupByRaw = implode(', ', $groupBy);
            $query->groupByRaw($groupByRaw);
        }

        return $query->get();
    }

    public function deleteCustomData(?array $where = null, $whereRaw)
    {
        $query = $this->model->where($where);

        // Add raw WHERE condition
        if ($whereRaw !== null) {
            $query->whereRaw($whereRaw);
        }

        return $query->delete();
    }

    public function updateCustomData(?array $where = null, $whereRaw, ?array $updateData = null)
    {
        $query = $this->model->where($where);

        // Add raw WHERE condition
        if ($whereRaw !== null) {
            $query->whereRaw($whereRaw);
        }

        // If $updateData is provided, add an update clause to the query
        if ($updateData !== null && is_array($updateData) && count($updateData) > 0) {
            $query->update($updateData);
        }

        return $query;
    }
}
