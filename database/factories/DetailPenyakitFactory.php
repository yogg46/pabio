<?php

namespace Database\Factories;

use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailPenyakit>
 */
class DetailPenyakitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $Penyakit = Penyakit::pluck('idPenyakit');
        $gejala = Gejala::pluck('idGejala');
        return [
            'idPenyakit' => fake()->randomElement($Penyakit),
            'idGejala' => fake()->randomElement($gejala),
            'Buah' => Arr::random(['Mangga', 'Alpukat', 'Jambu Biji', 'Durian', 'Nangka', 'Rambutan', 'Jeruk', 'Kelengkeng', 'Anggur', 'Sawo']),
            'Bagian' => Arr::random(['Buah', 'Batang', 'Daun', 'Akar'])
        ];
    }
}
