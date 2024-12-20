<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kontakModel extends Model
{
    protected $table="kontak";
    protected $column=["lokasi","email","tlpn","website"];
    protected $primaryKey="id_kontak";
    public $timestamps=false;
}
