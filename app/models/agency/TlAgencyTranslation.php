<?php

namespace App\models\agency;

use Illuminate\Database\Eloquent\Model;

class TlAgencyTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['description'];
}
