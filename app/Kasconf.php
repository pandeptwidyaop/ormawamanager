<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasconf extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'periode_id',
      'uang_kas'
    ];

    public function Periode(){
      return $this->belongsTo('App\Periode','periode_id');
    }

    public function Kas(){
      return $this->hasMany('App\Kas');
    }
}
