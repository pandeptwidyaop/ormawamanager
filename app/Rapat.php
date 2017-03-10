<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'kategorirapat_id',
      'user_id',
      'judul_rapat',
      'tanggal_rapat',
      'isi_rapat'
    ];

    public function User(){
      return $this->belongsTo('App\User','user_id');
    }

    public function Kategorirapat(){
      return $this->belongsTo('App\Kategorirapat','kategorirapat_id');
    }

    public function Absen(){
      return $this->hasMany('App\Absen');
    }

    public function Kas(){
      return $this->hasMany('App\Kas');
    }
}
