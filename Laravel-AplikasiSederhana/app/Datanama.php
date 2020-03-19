<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datanama extends Model
{
    protected $table = 'datanamas';
    protected $fillable = ['nama','alamat','no_telp','asal_sekolah'];
}
