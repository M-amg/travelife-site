<?php

namespace App\models\customer;

use Illuminate\Database\Eloquent\Model;

class TlAlertTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'description'];
}
