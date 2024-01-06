<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    public $timestamps = false;
    protected $fillable = ['nama','nim','prodi_id'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }

}
