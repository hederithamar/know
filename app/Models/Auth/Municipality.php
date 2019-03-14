<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Auth\Traits\Attribute\MunicipalityAttribute;
use App\Models\Auth\Traits\Relationship\MunicipalityRelationship;

/**
 * Class Municipality.
 */
class Municipality extends Model
{
    use SoftDeletes, MunicipalityAttribute, MunicipalityRelationship;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'municipalities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['name', 'sort', 'code'];
}
