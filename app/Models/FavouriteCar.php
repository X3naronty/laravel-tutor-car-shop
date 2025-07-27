<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $car_id
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FavouriteCar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FavouriteCar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FavouriteCar query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FavouriteCar whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FavouriteCar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FavouriteCar whereUserId($value)
 * @mixin \Eloquent
 */
class FavouriteCar extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'car_id',
        'user_id'
    ];
}
