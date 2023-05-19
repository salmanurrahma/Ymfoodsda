<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    public function user()
    {
           return $this->belongsTo('app\User','user_id','id');
    }
    public function pesanan_detail()
    {
           return $this->hasMany('app\PesananDetail','pesanan_id','id');
    }
}

