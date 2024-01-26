<?php

namespace Tests\Feature;

use App\Models\NannyBooking;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NannyBookingControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_returns_view_with_nanny_bookings()
    {
        // Seed the database with dummy data
        User::factory(10)->create();
        NannyBooking::factory(20)->create();

        // Make a request to the index route
        $response = $this->get(route('nanny-booking-index'));

        // Assert that the response has a successful status code
        $response->assertStatus(200);
    }

}
