<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $primaryKey = 'id' ;

    protected $fillable = [
      'user_id',
      'jumlah_pengeluaran',
      'tanggal_pengeluaran',
      'keterangan_pengeluaran',
      'nota_pengeluaran'
    ];

    public function User(){
      return $this->belongsTo('App\User','user_id');
    }
}
