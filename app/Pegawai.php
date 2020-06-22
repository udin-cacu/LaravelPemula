<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = ['id_pegawai','nama','jenis_kelamin','email','no_hp'];
}
