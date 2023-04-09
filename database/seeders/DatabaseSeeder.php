<?php

namespace Database\Seeders;

use App\Models\Orang;
use App\Models\Usaha;
use App\Models\Bumdes;
use App\Models\Pengelola;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pengelola::create([
            'nama' => 'bayu',
            'username' => 'bayu',
            'password' => Hash::make('123456789'),
            'status' => 'ketua',
        ]);

        Pengelola::create([
            'nama' => 'baya',
            'username' => 'baya',
            'password' => Hash::make('123456789'),
            'status' => 'bendahara',
        ]);

        Pengelola::create([
            'nama' => 'bayi',
            'username' => 'bayi',
            'password' => Hash::make('123456789'),
            'status' => 'accounting',
        ]);

        Bumdes::create([
            'nama' => 'percobaan',
            'alamat' => 'tidak tau dimana',
        ]);

        // Usaha::factory(10)->create();
        // Orang::factory(10)->create();
    }
}
