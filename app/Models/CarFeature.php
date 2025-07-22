<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $car_id
 * @property int $abs
 * @property int $air_conditioning
 * @property int $power_windows
 * @property int $power_door-locks
 * @property int $cruise_control
 * @property int $bluetooth_connectivity
 * @property int $remote_start
 * @property int $gps_navigation
 * @property int $heated_seats
 * @property int $climate_control
 * @property int $rear_parking_sensors
 * @property int $leather_seats
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature whereAbs($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature whereAirConditioning($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature whereBluetoothConnectivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature whereClimateControl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature whereCruiseControl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature whereGpsNavigation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature whereHeatedSeats($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature whereLeatherSeats($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature wherePowerDoorLocks($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature wherePowerWindows($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature whereRearParkingSensors($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarFeature whereRemoteStart($value)
 * @mixin \Eloquent
 */
class CarFeature extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'car_id';

    protected $fillable = [
        'car_id',
        'abs',
        'air_conditioning',
        'power_windows',
        'power_door-locks',
        'cruise_control',
        'bluetooth_connectivity',
        'remote_start',
        'gps_navigation',
        'heated_seats',
        'climate_control',
        'rear_parking_sensors',
        'leather_seats',
    ];
}
