<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keanggotaan extends Model
{
    protected $primaryKey ='id';

    protected $fillable = ['anggota_id','periode_id'];

    public function Ormawa(){
      return $this->belongsTo('App\Ormawa');
    }

    public function Periode(){
      return $this->belongsTo('App\Periode','periode_id');
    }

    public function Anggota(){
      return $this->belongsTo('App\Anggota','anggota_id');
    }

    public function Pengurus(){
      return $this->hasOne('App\Pengurus','pengurus_id');
    }

    public function Rapat(){
      return $this->hasMany('App\Rapat');
    }

    public function Panitia(){
      return $this->hasMany('App\Panitia');
    }

    public function Kas(){
      return $this->hasMany('App\Kas');
    }
}
