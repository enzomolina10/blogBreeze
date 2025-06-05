<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateMigrationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('migrations')->insert([
            'migration' => '2025_06_04_031536_create_posts_table',
            'batch' => 1,
        ]);
    }
}
