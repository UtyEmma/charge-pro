<?php

namespace Utyemma\Chargepro\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model {
    use SoftDeletes;
    
    protected $fillable = ['reference', ];

}
