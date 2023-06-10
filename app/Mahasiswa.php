<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $primaryKey = 'nim';

    protected $table = 'mhs';

    protected $fillable = [
        'nim',        
        'nama',        
        'gender',        
        'jurusan',        
        'bidang_minat'        
    ];
}
