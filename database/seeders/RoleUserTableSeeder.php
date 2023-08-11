<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;
use App\Models\User;
use App\Models\UserRole;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managerRole = Roles::where('name', 'Project Manager')->first();
        $teamMemberRole = Roles::where('name', 'Team Member')->first();

        $user1 = User::where('email', 'manager@example.com')->first();
        UserRole::create([
            "user_id" => $user1->id,
            "role_id" => $managerRole->id
        ]);

        $user2 = User::where('email', 'member@example.com')->first();
        UserRole::create([
            "user_id" => $user2->id,
            "role_id" => $teamMemberRole->id
        ]);
    }
}
