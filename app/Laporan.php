<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $primaryKey = 'id';
    protected $fillabel = [
      'user_id',
      'kepanitiaan_id',
      'laporan'
    ];

    public function User(){
      return $this->belongsTo('App\User');
    }

    public function Kepanitiaan(){
      return $this->belongsTo('App\Kepanitiaan');
    }
}
