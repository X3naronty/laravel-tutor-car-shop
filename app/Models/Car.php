<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use PHPUnit\Framework\Attributes\Before;

/**
 * @property int $id
 * @property int $model_id
 * @property int $year
 * @property int $price
 * @property string $vin
 * @property int $mileage
 * @property int $car_type_id
 * @property int $fuel_type_id
 * @property int $user_id
 * @property int $city_id
 * @property string|null $description
 * @property string $published_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereCarTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereFuelTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereMileage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereVin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car withoutTrashed()
 * @property-read \App\Models\CarType $carType
 * @property-read \App\Models\City $city
 * @property-read \App\Models\CarFeature|null $features
 * @property-read \App\Models\FuelType $fuelType
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CarImage> $images
 * @property-read int|null $images_count
 * @property-read \App\Models\Model $model
 * @property-read \App\Models\User $user
 * @mixin \Eloquent
 */
class Car extends EloquentModel
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
        'description',
        'published_at',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    public function features(): HasOne {
        return $this->hasOne(CarFeature::class);
    }         

    public function carImages(): HasMany {
        return $this->hasMany(CarImage::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function fuelType(): BelongsTo {
        return $this->belongsTo(FuelType::class);
    }

    public function carType(): BelongsTo {
        return $this->model->carType();
    }

    public function city(): BelongsTo {
        return $this->belongsTo(City::class);
    }

    public function model(): BelongsTo {
        return $this->belongsTo(Model::class);
    }

    public function state(): BelongsTo {
        return $this->city->state();
    }

    public function maker(): BelongsTo {
        return $this->model->maker();
    }
}
