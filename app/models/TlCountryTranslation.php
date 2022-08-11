<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TlCountryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
}
