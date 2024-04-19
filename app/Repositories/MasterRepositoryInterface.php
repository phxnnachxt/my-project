<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use TimWassenburg\RepositoryGenerator\Repository\EloquentRepositoryInterface;

interface MasterRepositoryInterface extends EloquentRepositoryInterface
{
    public function paginate($param, ?array $searchFields = null, ?array $withRelations = null, ?array $where = null, $whereRaw): Collection;
    public function getAll($param, ?array $searchFields = null, ?array $withRelations = null): Collection;

    public function selectCustomData(?array $where = null, $whereRaw, ?array $rawFields = null, ?array $orderBy = null, ?array $groupBy = null, ?array $joinConditions = null, ?array $withRelations = null): ?Collection;
    public function deleteCustomData(?array $where = null, $whereRaw);
    public function updateCustomData(?array $where = null, $whereRaw, ?array $updateData = null);

}
