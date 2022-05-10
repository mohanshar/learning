<?php

use Illuminate\Database\Seeder;

class PostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\UserPosting::class, 500)->create();
    }
}
