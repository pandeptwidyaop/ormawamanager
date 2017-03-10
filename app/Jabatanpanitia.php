<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatanpanitia extends Model
{
    protected $primaryKey =  'id';

    protected $fillable = ['jabatanpanitia'];

    public function Panitia(){
      return $this->hasMany('App\Panitia');
    }
}
