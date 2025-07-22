<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FuelType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FuelType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FuelType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FuelType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FuelType whereName($value)
 * @mixin \Eloquent
 */
class FuelType extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    // protected $table = 'car_fuel_types'; // custom table name
    // protected $primaryKey = 'fuel_type_id'; // custom primary key
    // public $incrementing = false; // disable auto incrementing
    // protected $keyType = 'string'; // primary key type    

    protected $fillable = [
        'name',
    ];
}