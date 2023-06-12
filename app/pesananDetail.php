<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class pesananDetail extends Model

    
{
    
    public function user()
    {
           return $this->belongsTo('app\Barang','user_id','id');
    }

    public function pesanandetail()
    {
           return $this->belongsTo('app\Pesanan','pesanan_id','id');
        
    }
}

