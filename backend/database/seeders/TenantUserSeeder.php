<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tenant; // Import the Tenant model
// use App\Models\User;   // Import the User model
use App\Models\Users;

class TenantUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::all()->each(function ($tenant) {
            Users::factory()->count(5)->create(['tenant_id' => $tenant->id]); // Adjust the count as needed
        });
    }
}
