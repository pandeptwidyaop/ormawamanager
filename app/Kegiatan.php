<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'bidangkegiatan_id',
      'user_id',
      'kegiatan',
      'bulan_kegiatan',
      'uang_kegiatan'
    ];

    public function Bidangkegiatan(){
      return $this->belongsTo('App\Bidangkegiatan','bidangkegiatan_id');
    }

    public function User(){
      return $this->belongsTo('App\User','user_id');
    }

    public function Kepanitiaan(){
      return $this->hasMany('App\Kepanitiaan');
    }
}
