<?php

namespace App\Models;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;


    // use AutoNumberTrait;


    
    protected $primayKey = 'idObat';

    protected $fillable = [
        'idPenyakit',
        'idObat',
        'namaObat',
        'gambarObat',
        'cara',
        'jenis',
        'khasiat'
    ];

    public function obatToPenyakit()
    {
        return $this->belongsTo(Penyakit::class, 'idPenyakit','idPenyakit');
    }
}
