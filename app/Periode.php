<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['periode'];

    public function Keanggotaan(){
      return $this->hasMany('App\Keanggotaan');
    }

    public function Nomorsuratkeluarconf(){
      return $this->hasOne('App\Nomorsuratkeluarconf');
    }

    public function Kasconf(){
      return $this->hasOne('App\Kasconf');
    }
}
