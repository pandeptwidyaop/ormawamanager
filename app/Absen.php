<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'user_id',
      'keterangan_absen'
    ];

    public function User(){
      return $this->belongsTo('App\User');
    }
}
