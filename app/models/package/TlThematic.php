<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlThematic extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $timestamps = false;
    public $translatedAttributes = ['title', 'subtitle', 'description'];
    protected $fillable = ['picture'];

    public function tlPackages(){
        return $this->belongsToMany('App\models\package\TlPackage', 'tl_thematic_packages', 'tl_thematic_id', 'tl_package_id');
    }
}
