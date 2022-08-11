<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TlActiviteTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'description'];
}
