<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Song
 * @package App
 */
class Song extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['album_id','track','timing','title'];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album()
    {
        return $this->belongsTo('\App\Album');
    }
}
