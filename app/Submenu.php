<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'menu_id',
      'nama_submenu',
      'link_submenu',
      'icon_sumbenu',
    ];

    public function Menu(){
      return $this->belongsTo('App\Menu','menu_id');
    }
}
