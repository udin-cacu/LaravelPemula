<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['judul','pengarang','kd_book','th_terbit','stock'];
}
