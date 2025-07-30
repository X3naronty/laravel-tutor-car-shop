<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Maker newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Maker newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Maker query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Maker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Maker whereName($value)
 * @mixin \Eloquent
 */
class Maker extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function models(): HasMany
    {
        return $this->hasMany(Model::class);
    }
}
