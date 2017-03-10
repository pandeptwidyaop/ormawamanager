<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepanitiaan extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'kegiatan_id',
      'user_id',
      'nama_kepanitian',
      'tanggal_pembentukan_kepanitiaan'
    ];

    public function Kegiatan(){
      return $this->belongsTo('App\Kegiatan','kegiatan_id');
    }

    public function User(){
      return $this->belongsTo('App\User','user_id');
    }

    public function Panitia(){
      return $this->hasMany('App\Panitia');
    }

    public function Laporan(){
      return $this->hasMany('App\Laporan');
    }
}
