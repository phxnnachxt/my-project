<?php

namespace App\Repositories\Eloquent;

use App\Models\ReplacementRawMaterials;
use App\Repositories\ReplacementRawMaterialsRepositoryInterface;


/**
 * Class ReplacementRawMaterialsRepository.
 */
class ReplacementRawMaterialsRepository extends MasterRepository implements ReplacementRawMaterialsRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param ReplacementRawMaterials $model
     */
    public function __construct(ReplacementRawMaterials $model)
    {
        parent::__construct($model);
    }
}
