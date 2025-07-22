<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * @property int $id
 * @property int $maker_id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Model query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Model whereMakerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Model whereName($value)
 * @mixin \Eloquent
 */
class Model extends EloquentModel
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'maker_id',
        'name',
    ];
}
