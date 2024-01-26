<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\NannyBooking;
use App\Http\Resources\NannyBookingResource;
use Illuminate\Http\Request;

class NannyBookingController extends Controller
{
    /**
     * Display the index page for Nanny Bookings.
     *
     * Retrieves all nanny bookings along with associated user information,
     * transforms them into a resource collection, and passes the collection
     * to the Inertia view for rendering the NannyBooking index page.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        // Retrieve all nanny bookings with associated user information and apply filters
        $nannyBookings = NannyBookingResource::collection(
            NannyBooking::with('user')->filter(['filter_value' => $request->input('filter_value')])->get()
        );

        return Inertia::render('NannyBooking/Index', [
            'nannyBookings' => $nannyBookings,
        ]);
    }
}
