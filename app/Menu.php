<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'nama_menu',
      'link_menu',
      'id_menu',
      'icon_menu'
    ];

    public function Submenu(){
      return $this->hasMany('App\Submenu');
    }

    public function Menugroup(){
      return $this->hasMany('App\Menugroup');
    }
}
