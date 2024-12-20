<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kegiatanModel extends Model
{
    protected $table="kegiatan";
    protected $column=["gambar","nama_kegiatan","deskripsi_kegiatan"];
    protected $primaryKey="id_kegiatan";
    public $timestamps=false;
}
