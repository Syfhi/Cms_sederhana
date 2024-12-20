<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class komentarModel extends Model
{
    protected $table="komentar";
    protected $column=["nama","email","subjek","pesan"];
    protected $primaryKey="id_komentar";
    public $timestamps=false;
}
