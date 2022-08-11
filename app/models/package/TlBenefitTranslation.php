<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlBenefitTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'description'];
}
