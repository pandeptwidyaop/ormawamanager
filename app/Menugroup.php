<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menugroup extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['menu_id','level'];

    public function Menu(){
      return $this->belongsTo('App\Menu','menu_id');
    }
}
