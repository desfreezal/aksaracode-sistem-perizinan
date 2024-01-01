<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\DaftarUlang;
use App\Models\Operasional;
use App\Models\Pendirian;
use App\Models\StatusDokumen;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        if (StatusDokumen::count() === 0) {
            $this->call(StatusDokumenSeeder::class);
            $this->call(RoleSeeder::class);
            $this->call(CategoriesSeeder::class);
            $this->call(UserSeeder::class);
        }


        Pendirian::factory(100)->create();
        Operasional::factory(100)->create();
        DaftarUlang::factory(100)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
