<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlPackageTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'description','shortDescription','inclus','noninclus'];
}
