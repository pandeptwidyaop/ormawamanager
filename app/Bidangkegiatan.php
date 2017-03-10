<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidangkegiatan extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['bidangkegiatan'];

    public function Kegiatan(){
      return $this->hasMany('App\Kegiatan');
    }
}
