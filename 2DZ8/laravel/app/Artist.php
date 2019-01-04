<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Artist
 * @package App
 */
class Artist extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['artist','role'];

    /**
     * @var bool
     */
    public $timestamps = false;
}
