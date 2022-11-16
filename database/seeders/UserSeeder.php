<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userNumber = $this->command->ask('por favor ingrese el numero de usuarios a crear!!', 0);

        if ($userNumber <= 0) {
            return;
        }

        $userRoles = $this->command->choice(
            'Please enter the roles to use !!, use \',\' to select multiple roles',
            [User::USER_ROLE, User::ADMIN_ROLE],
            User::USER_ROLE,
        );

        $users = User::factory()
            ->count($userNumber)
            ->create([
                'role' => $userRoles,
            ]);

        $this->command->info($users->count() . ' usuarios creados');

        foreach ($users->toArray() as $user) {
            $this->command->info('>> Email:' . $user['email'] . ' Name:' . $user['name']);
        }
    }
}
