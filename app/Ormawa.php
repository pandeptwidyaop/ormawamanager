<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
      'nama_ormawa',
      'tgl_lahir_ormawa',
      'deskripsi_ormawa'
    ];

    public function Keanggotaan(){
      return $this->hasMany('App\Keanggotaan');
    }
}
