<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penemuan extends Model
{
    use HasFactory;

    protected $table = 'penemuan';

    protected $guarded = ['id'];

    public function pengaduan(){
        return $this->belongsTo(Pengaduan::class, 'pengaduan_id', 'id');
    }
}
