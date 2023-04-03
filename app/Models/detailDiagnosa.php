<?php

namespace App\Models;

use Illuminate\Support\Str;
use Carbon\CarbonImmutable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailDiagnosa extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();


        static::creating(function ($model) {
            $model->key = str_replace([' ', "'"], '-', strtolower('DetailDiagnosa-' . CarbonImmutable::now()->timestamp . Str::random(10) . uniqid()));
        });
    }
    protected $fillable = [
        'idDiagnosa',
        'idDetailPenyakit'

    ];
}
