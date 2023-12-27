<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $categories = ['TK', 'SD', 'SMP'];

        foreach ($categories as $category) {
            DB::table('category_pendirian')->insert([
                'Name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
