<?php


namespace App\Models;


use App\Facades\Img;
use App\Models\Concerns\Blameable;
use App\Traits\VisibilityTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class MapLayer
 * @package App\Models
 *
 * @property int $id
 * @property int $map_id
 * @property string $name
 * @property string $entry
 * @property string $image
 * @property string $visibility
 * @property int $position
 * @property int $height
 * @property int $width
 *
 * @property Map $map
 *
 * @method static self|Builder ordered()
 */
class MapLayer extends Model
{
    use VisibilityTrait, Blameable;

    /** Fillable fields */
    protected $fillable = [
        'map_id',
        'name',
        'entry',
        'image',
        'position',
        'visibility',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function map()
    {
        return $this->belongsTo(Map::class, 'map_id');
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeOrdered(Builder $query)
    {
        return $query
            ->orderByDesc('position')
            ->orderBy('name');
    }

    /**
     * Get the image (or default image) of an entity
     * @param int $width = 200
     * @param int $width = null
     * @return string
     */
    public function getImageUrl(int $width = 400, int $height = null)
    {
        return Img::crop($width, (!empty($height) ? $height : $width))->url($this->image);
    }
}
