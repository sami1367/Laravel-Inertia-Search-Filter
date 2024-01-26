<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

class NannyBookingController extends Controller
{
    public function index()
    {
        return Inertia::render('NannyBooking/Index');
    }
}
