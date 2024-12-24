<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            ['name' => 'create-event'],
            ['name' => 'edit-event'],
            ['name' => 'delete-event'],
            ['name' => 'view-event'],
        ]);
        
    }
}
