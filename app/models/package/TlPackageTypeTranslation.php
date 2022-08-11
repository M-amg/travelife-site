<?php

namespace App\Models\package;

use Illuminate\Database\Eloquent\Model;

class TlPackageTypeTranslation extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['name', 'description']; 
}
