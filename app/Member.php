<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['id_member','nama','jenis_kelamin','email','jurusan','no_hp','alamat'];
}
