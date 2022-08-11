<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlInfoHotelTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','description'];
}
