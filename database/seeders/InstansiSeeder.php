<?php

namespace Database\Seeders;

use App\Models\Instansi;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class InstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=0; $i<=10; $i++) {
            Instansi::create([
                'nama' => $faker->company(),
                'alamat' => $faker->streetAddress(),
                'email' => $faker->unique->safeEmail,
                'tlp' => $faker->phoneNumber,
                'slug' => strtolower(Str::random(7))
            ]);
        }
    }
}
