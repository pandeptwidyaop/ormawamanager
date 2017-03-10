<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'user_id',
      'nomor_suratmasuk',
      'tanggal_suratmasuk',
      'perihal_suratmasuk'
    ];

    public function User(){
      return $this->belongsTo('App\User','user_id');
    }
}
