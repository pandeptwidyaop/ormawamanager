<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomorsuratkeluar extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'nomorsuratkeluarconf_id',
      'user_id',
      'nomor_suratkeluar'
    ];

    public function Nomorsuratkeluarconf(){
      return $this->hasMany('App\Nomorsuratkeluarconf');
    }

    public function User(){
      return $this->belongsTo('App\User','user_id');
    }

    public function Suratkeluar(){
      return $this->hasOne('App\Suratkeluar');
    }

}
