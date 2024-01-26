<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\NannyBooking;
use App\Http\Resources\NannyBookingResource;

class NannyBookingController extends Controller
{
    /**
     * Display the index page for Nanny Bookings.
     *
     * Retrieves all nanny bookings along with associated user information,
     * transforms them into a resource collection, and passes the collection
     * to the Inertia view for rendering the NannyBooking index page.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        // Retrieve all nanny bookings with associated user information
        $nannyBookings = NannyBookingResource::collection(NannyBooking::with('user')->get());

        // Pass the nanny bookings to the Inertia view
        return Inertia::render('NannyBooking/Index', [
            'nannyBookings' => $nannyBookings,
        ]);
    }
}
