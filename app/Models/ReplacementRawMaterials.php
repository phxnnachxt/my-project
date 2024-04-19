<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplacementRawMaterials extends Model
{
    use HasFactory;
    protected $fillable = [
        'rm_replacement_id', 'raw_materials_id'
    ];

    public function raw_material()
    {
        return $this->hasOne(RawMaterials::class,'id','rm_replacement_id');
    }
}
