<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NannyBooking;
use App\Models\User;

class NannyBookingsTableSeeder extends Seeder
{
    public function run()
    {
        NannyBooking::factory(20)->create();
    }
}
