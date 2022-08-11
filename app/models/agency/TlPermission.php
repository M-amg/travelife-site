<?php

namespace App\models\agency;

use Illuminate\Database\Eloquent\Model;

class TlPermission extends Model
{
    public function agents()
    {
        return $this->belongsToMany('App\models\agency\TlAgent','tl_agent_permissions','tl_permission_id','tl_agent_id');

    }
}
