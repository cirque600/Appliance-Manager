<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Serial;
use App\Models\Appliance;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory()
                        ->count(3)
                        ->create();

        $appliances = Appliance::factory()
                    ->count(3)
                    ->create();

        $serials = Serial::factory()
                            ->count(3)
                            ->create();
    }
}
