<?php

namespace Utyemma\Chargepro\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model {
    use SoftDeletes;

    protected $fillable = ['name', 'code', 'rate', 'is_default', 'symbol'];

    protected $casts = [
        'is_default' => 'boolean'
    ];

    protected $attributes = [
        'is_default' => true
    ];


}
