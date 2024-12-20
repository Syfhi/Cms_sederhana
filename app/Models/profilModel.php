<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profilModel extends Model
{
    protected $table="profil";
    protected $column=["nama","alamat","kota","provinsi","website"];
    protected $primaryKey="id_profil";
    public $timestamps=false;
}
