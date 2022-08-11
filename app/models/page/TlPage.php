<?php

namespace App\models\page;

use Illuminate\Database\Eloquent\Model;

class TlPage extends Model
{
    public function tlArticles()
    {
        return $this->hasMany('App\models\page\TlArticle');
    }
}
