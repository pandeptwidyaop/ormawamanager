<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panitia extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'kepanitiaan_id',
      'user_id',
      'keanggotaan_id',
      'jabatanpanitia_id'
    ];

    public function Kepanitiaan(){
      return $this->belongsTo('App\Kepanitiaan','kepanitiaan_id');
    }

    public function User(){
      return $this->belongsTo('App\User','user_id');
    }

    public function Keanggotaan(){
      return $this->belongsTo('App\Keanggotaan','keanggotaan_id');
    }

    public function Jabatanpanitia(){
      return $this->belongsTo('App\Keanggotaan','jabatanpanitia_id');
    }
}
