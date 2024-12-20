<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carouselModel extends Model
{
    protected $table="carousel";
    protected $column=["gambar"];
    protected $primaryKey="id_gambar";
    public $timestamps=false;
}
