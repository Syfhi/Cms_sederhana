<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class beranda extends Model
{
    protected $table="beranda";
    protected $column=["pict","judul_beranda","nama_beranda","deskripsi_beranda","lokasi","instagram","youtube","facebook","tentang"];
    protected $primaryKey="id_beranda";
    public $timestamps=false;
}
