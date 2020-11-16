<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable =['producto_id','user_id','cantidad'];

    public function user()
    {
        return $this->belongsTo('App\User')->withDefault();
    }
    public function producto()
    {
        return $this->belongsTo('App\Producto')->withDefault();
    }
}
