<?php

namespace App\Models;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Penyakit extends Model
{
    use HasFactory;
    // use Sluggable;
    // use AutoNumberTrait;

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $lastKey = static::max('idPenyakit'); // Get the highest key currently in the database
            $lastNumber = substr($lastKey, 2); // Extract the numeric part of the key
            $newNumber = intval($lastNumber) + 1; // Increment the numeric part
            $model->idPenyakit = 'P-' . $newNumber; // Set the key attribute on the new model instance
        });
        static::creating(function ($model) {
            $model->key = str_replace([' ', "'"], '-', strtolower($model->idPenyakit . ' ' . $model->namaPenyakit));
        });
    }

    // public function getAutoNumberOptions()
    // {
    //     return [
    //         'idPenyakit' => [
    //             'format' => 'P-?', // autonumber format. '?' will be replaced with the generated number.
    //             'length' => 2 // The number of digits in an autonumber
    //         ]
    //     ];
    // }
    protected $primayKey = 'idPenyakit';
    protected $fillable = [
        'idPenyakit',
        'namaPenyakit',
        'keterangan',
        'solusi',
        'gambar',
        'key'
    ];


    public function penyakitToDetailPenyakit()
    {
        return $this->hasMany(DetailPenyakit::class, 'idPenyakit', 'idPenyakit');
    }
    public function penyakitToObat()
    {
        return $this->hasMany(Obat::class, 'idPenyakit', 'idPenyakit');
    }
}
