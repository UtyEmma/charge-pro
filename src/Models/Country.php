<?php

namespace Utyemma\Chargepro\Models;

use Illuminate\Database\Eloquent\Casts\AsEnumCollection;
use Illuminate\Database\Eloquent\Model;

class Country extends Model {
    
    protected $fillable = ['name', 'iso_code', 'iso_code_3', 'currency_code', 'intl_phone', 'payment_methods', 'is_default'];

    protected $primary_key = 'iso_code';
    public $incrementing = false;

    function casts(){
        return [
            'is_default' => 'boolean'
        ];
    }

    protected $attributes = [
        'is_default' => false
    ];

    function scopeIsDefault($query){
        $query->where('is_default', true);
    }

    function currency(){
        return $this->belongsTo(Currency::class, 'currency_code', 'code');
    }

    function getFlagAttribute(){
        return $this->getFirstMediaUrl('countries');
    }

}
