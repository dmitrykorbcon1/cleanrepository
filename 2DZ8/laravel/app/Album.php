<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Album
 * @package App
 */
class Album extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['year','image','title','tracksnum'];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function songs()
    {
        return $this->hasMany('\App\Song');
    }
}
