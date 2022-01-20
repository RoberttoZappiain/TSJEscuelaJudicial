<?php
namespace Database\Seeders;

use Database\Seeders\Dirigidoa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Dirigidoa::class,
            Roles::class
        ]);
    }
}
