<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    protected $table = 'sekolahs';
    protected $fillable = ['nama_sekolah'];
}
