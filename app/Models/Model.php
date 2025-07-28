<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
 * @property-read \App\Models\Maker $maker
 * @mixin \Eloquent
 */
class Model extends EloquentModel
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'maker_id',
        'car_type_id',
    ];

    public function maker(): BelongsTo {
        return $this->belongsTo(Maker::class);
    }

    public function carType(): BelongsTo {
        return $this->belongsTo(CarType::class);
    }
}
