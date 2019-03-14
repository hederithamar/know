<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Auth\Traits\Attribute\StateAttribute;
use App\Models\Auth\Traits\Relationship\StateRelationship;

/**
 * Class State.
 */
class State extends Model
{
    use SoftDeletes, StateAttribute, StateRelationship;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'states';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'sort', 'code'];
}
