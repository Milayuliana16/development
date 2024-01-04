<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guestbook extends Model
{
    use HasFactory;
    protected $table = 'guestbooks';
    public $timestamps = false;
    protected $fillable = ['namalengkap', 'alamat', 'kehadiran'];
}
