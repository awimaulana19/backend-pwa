<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanAwalKehamilan extends Model
{
    use HasFactory;

    protected $table = 'pemeriksaan_awal_kehamilan';
    protected $guarded = ['id'];
}
