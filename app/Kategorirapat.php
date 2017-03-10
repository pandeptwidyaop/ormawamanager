<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorirapat extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'Kategorirapat'
    ];

    public function Rapat(){
      return $this->hasMany('App\Rapat');
    }
}
