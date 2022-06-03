<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\suplier>
 */
class SuplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $data_Barang = array('Keramik', 'Semen', 'Besi Beton', 'Bata Ringan', 'Atap Metal','Pintu Besi','Papan Gipsum','Lantai Kayu','Cat','Pasir','Beton');
        $data_Barang_random = array_rand($data_Barang, 2);

        return [
            'nama_suplier' => $this->faker->name,
            'alamat_suplier' => $this->faker->address,
            'no_telp_suplier' => $this->faker->phoneNumber,
            'keterangan' => $data_Barang[$data_Barang_random[0]]
          
            
        ];
    }
}
