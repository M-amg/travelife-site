<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TlPaymentTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['titre','description'];
}
