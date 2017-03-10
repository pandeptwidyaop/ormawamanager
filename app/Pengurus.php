<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'keanggotaan_id',
      'jabatanpengurus_id'
    ];

    public function Jabatanpengurus(){
      return $this->belongsTo('App\Jabatanpengurus','jabatanpengurus_id');
    }

    public function Keanggotaan(){
      return $this->belongsTo('App\Keanggotaan','keanggotaan_id');
    }

    public function User(){
      return $this->hasOne('App\User');
    }
}
