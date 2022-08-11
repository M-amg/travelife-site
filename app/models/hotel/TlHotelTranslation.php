<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlHotelTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['shortdesc'];
}
