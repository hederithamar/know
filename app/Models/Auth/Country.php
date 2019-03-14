<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Auth\Traits\Attribute\CountryAttribute;
use App\Models\Auth\Traits\Relationship\CountryRelationship;

/**
 * Class Country.
 */
class Country extends Model
{
    use SoftDeletes, CountryAttribute, CountryRelationship;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'sort', 'code'];
}
