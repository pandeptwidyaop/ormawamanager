<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'nomorsuratkeluar_id',
      'user_id',
      'perihal_suratkeluar',
      'tanggal_suratkeluar'
    ];

    public function Nomorsuratkeluar(){
      return $this->belongsTo('App\Nomorsuratkeluar','nomorsuratkeluar_id');
    }

    public function User(){
      return $this->belongsTo('App\User','user_id');
    }
}
