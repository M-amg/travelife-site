<?php

namespace App\models\page;

use Illuminate\Database\Eloquent\Model;

class TlArticle extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['description'];

    public function tlPage()
    {
        return $this->belongsTo('App\models\page\TlPage');
    }
}
