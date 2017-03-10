<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Pengurus(){
      return $this->belongsTo('App\Pengurus','pengurus_id');
    }

    public function Rapat(){
      return $this->hasMany('App\Rapat');
    }

    public function Suratmasuk(){
      return $this->hasMany('App\Suratmasuk');
    }

    public function Nomorsuratkeluar(){
      return $this->hasMany('App\Nomorsuratkeluar');
    }

    public function Suratkeluar(){
      return $this->hasMany('App\Suratkeluar');
    }

    public function Kegiatan(){
      return $this->hasMany('App\Kegiatan');
    }

    public function Kepanitiaan(){
      return $this->hasMany('App\Kepanitiaan');
    }

    public function Panitia(){
      return $this->hasMany('App\Panitia');
    }

    public function Pemasukan(){
      return $this->hasMany('App\Pemasukan');
    }

    public function Pengeluaran(){
      return $this->hasMany('App\Pengeluaran');
    }

    public function Kas(){
      return $this->hasMany('App\Kas');
    }

    public function Laporan(){
      return $this->hasMany('App\Laporan');
    }

    public function Absen(){
      return $this->hasMany('App\Absen');
    }

}
