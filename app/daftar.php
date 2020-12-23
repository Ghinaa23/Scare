<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class daftar extends Model
{	
    protected $fillable = [
    	'nama','tgl_lahir','usia','alamat','berat_badan','tinggi_badan','gol_darah','keluhan'
    ];
}