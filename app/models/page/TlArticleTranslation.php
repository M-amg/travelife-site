<?php

namespace App\models\page;

use Illuminate\Database\Eloquent\Model;

class TlArticleTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['description'];
}
