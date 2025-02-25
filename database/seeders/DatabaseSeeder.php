<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jika Anda masih ingin menggunakan contoh pengguna, Anda bisa mengaktifkan kode ini.
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Panggil seeder lainnya
        $this->call([
            PenggunaSeeder::class,
            SayurSeeder::class,
            BuahSeeder::class,
            BuahSeeder::class,
        ]);
    }
}
