<?php

namespace App\Repositories\Eloquent;

use App\Models\RawMaterials;
use App\Repositories\RawMaterialsRepositoryInterface;

/**
 * Class RawMaterialsRepository.
 */
class RawMaterialsRepository extends MasterRepository implements RawMaterialsRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param RawMaterials $model
     */
    public function __construct(RawMaterials $model)
    {
        parent::__construct($model);
    }
}
