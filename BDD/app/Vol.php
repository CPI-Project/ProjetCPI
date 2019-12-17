<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    public $primaryKey = 'num_vol';
    public $incrementing = false;
    protected $keyType = 'string';
}
