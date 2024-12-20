<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class galeriModel extends Model
{
    protected $table="galeri";
    protected $column=["pict","nama_galeri","deskripsi_galeri"];
    protected $primaryKey="id_galeri";
    public $timestamps=false;
}

