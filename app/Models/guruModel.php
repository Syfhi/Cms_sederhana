<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class guruModel extends Model
{
    protected $table="guru";
    protected $column=["gambar","nama","jabatan","deskripsi"];
    protected $primaryKey="id_guru";
    public $timestamps=false;
}
