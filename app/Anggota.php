<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'nim_anggota',
      'nama_anggota',
      'nama_panggilan_anggota',
      'alamat_anggota',
      'handphone_anggota',
      'status_anggota'
    ];

    public function Keanggotaan(){
      return $this->hasMany('App\Keanggotaan');
    }
}
