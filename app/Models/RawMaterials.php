<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawMaterials extends Model
{
    use HasFactory;
    protected $fillable = [
        'rm_name', 'rm_type', 'rm_description'
    ];

    public function replacement(){
        return $this->hasMany(ReplacementRawMaterials::class)->with('raw_material');
    }

}
