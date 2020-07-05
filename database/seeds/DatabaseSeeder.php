<?php

use App\Model\Patient;
use App\Role;
use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class,6)->create();
      factory(User::class,6)->create();
      factory(Patient::class,15)->create();
    }
}
