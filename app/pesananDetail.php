<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class pesananDetail extends Model
    
{
    public function user()
    {
           return $this->belongsTo('app\Barang','user_id','id');
    }

    public function pesanan()
    {
           return $this->belongsTo('app\Pesanan','pesanan_id','id');
    }
}

