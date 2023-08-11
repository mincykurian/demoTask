<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ["Project Manager","Team Member"];
        foreach ($roles as $value) {
            Roles::create(["name"=>$value]);
        }
    }
}
