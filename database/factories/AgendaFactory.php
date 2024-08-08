<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tanggal_terima' => $this->faker->date(),
            'tipe_surat' => $this->faker->randomElement(['masuk', 'keluar']),
            'nomor_surat' => strtoupper($this->faker->bothify('###/???/IV/####')),
            'tanggal_surat' => $this->faker->date(),
            'dari_kepada' => $this->faker->company(),
            'hal' => $this->faker->sentence(3),
            'keterangan' => $this->faker->text(50),
            'kode_arsip' => strtoupper($this->faker->unique()->bothify('??##')),
        ];
    }
}
