<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';

    protected $guarded = [
        'id'
    ];

    // public function users(){
    //     return $this->belongsToMany(
    //         User::class,
    //         'pengaduan_users',
    //         'user_id',
    //         'pengaduan_id'
    //     );
    // }

    public function penemuan()
    {
        return $this->hasMany(Penemuan::class, 'pengaduan_id', 'id');
    }
}
