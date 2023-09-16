<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'peserta_id',
        'nilai_rata_rata',
        'nilai_matematika',
        'keterampilan',
        'perilaku',
        'kecepatan'
    ];

    public function peserta()
    {
        return $this->belongsTo(peserta::class);
    }
}
