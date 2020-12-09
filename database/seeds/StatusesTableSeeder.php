<?php

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    public function run()
    {
        $statuses = factory(Status::class)->times(100)->create();
    }
}
