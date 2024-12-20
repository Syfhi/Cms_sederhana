<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ekstraModel extends Model
{
    protected $table="ekstra";
    protected $column=["nama_ekstra","deskripsi_ekstra"];
    protected $primaryKey="id_ekstra";
    public $timestamps=false;
}
