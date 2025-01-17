<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisMakanan extends Model
{
    use HasFactory;

    protected $table = 'jenis_makanan';
    protected $fillable = ['nama_jenis_makanan'];
}
