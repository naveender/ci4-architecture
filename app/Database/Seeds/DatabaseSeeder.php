<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the seeders
        $this->call('RolesSeeder');
        // Add other seeders as needed
        // $this->call('AnotherSeeder');
        // $this->call('YetAnotherSeeder');
    }
}
