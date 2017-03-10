<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomorsuratkeluarconf extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'periode_id',
      'current',
      'letter'
    ];

    public function Periode(){
      return $this->belongsTo('App\Periode','periode_id');
    }

    public function Nomorsuratkeluar(){
      return $this->belongsTo('App\Nomorsuratkeluar','nomorsuratkeluar_id');
    }
}
