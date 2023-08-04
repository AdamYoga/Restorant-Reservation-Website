<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $pemesanan = Booking::all();
        return view("admin.booking", compact('pemesanan'));
    }

    public function update($id)
    {
        // Validate the incoming request data, if necessary
        // Add validation rules based on your requirements

        // Get the Booking model instance for the given $id
        $booking = Booking::findOrFail($id);

        // Update the 'status' attribute based on the submitted form data
        $booking->status = request('status');
        $booking->save();

        // Redirect back to the previous page or any other appropriate route
        return redirect()->back()->with('success', 'Status updated successfully.');
    }
}
