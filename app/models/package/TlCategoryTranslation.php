<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlCategoryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title'];
}
