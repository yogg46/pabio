<?php

namespace App\Models;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
  
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->key = str_replace([' ',"'"], '-',strtolower($model->idGejala.' '.$model->namaGejala));
        });
    }

    // protected $primayKey = 'idGejala';
    protected $fillable = [
        'idGejala',
        'namaGejala',
        'gambarGejala',
        'key'
    ];

    public function gejalaToDetailPenyakit()
    {
        return $this->hasMany(DetailPenyakit::class, 'idGejala');
    }
}
