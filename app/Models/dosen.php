<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $table = 'dosens';
    public $timestamps = false;
    protected $fillable = ['nama','mhs_id','matakuliah_id'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mhs_id');
    }

    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'matakuliah_id');
    }
}
