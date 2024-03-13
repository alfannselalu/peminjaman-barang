<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function alatBahan()
    {
        return $this->belongsTo(alatBahan::class, 'alatBahan_id');
    }
}
