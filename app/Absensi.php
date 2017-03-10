<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'absen_id',
    'keanggotaan_id',
    'asben'
  ];

  public function Absen(){
    return $this->belongsTo('App\Absen','absen_id');
  }

  public function Keanggotaan(){
    return $this->belongsTo('App\Keanggotaan','keanggotaan_id');
  }
}
