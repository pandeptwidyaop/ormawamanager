<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'rapat_id',
      'user_id',
      'kasconf_id',
      'keanggotaan_id',
      'bayar_kas'
    ];

    public function Rapat(){
      return $this->belongsTo('App\Rapat','rapat_id');
    }

    public function User(){
      return $this->belongsTo('App\User');
    }

    public function Kasconf(){
      return $this->belongsTo('App\Kasconf');
    }

    public function Keanggotaan(){
      return $this->belongsTo('App\Keanggotaan');
    }
}
