<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatanpengurus extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['jabatanpengurus'];

    public function Pengurus(){
      return $this->hasMany('App\Pengurus');
    }
}
