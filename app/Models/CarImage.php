<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $car_id
 * @property string $image_path
 * @property int $position
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarImage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarImage whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarImage whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarImage wherePosition($value)
 * @mixin \Eloquent
 */
class CarImage extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'car_id',
        'image_path',
        'position',
    ];
}
